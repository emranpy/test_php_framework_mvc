<?php

/**
 * Trait Model
 * @author emran <emranwidad91@gmail.com>
 * A reusable trait for basic CRUD (Create, Read, Update, Delete) operations
 * that can be included in any model class.
 *
 * Requires the class using it to define `$this->table` (table name)
 * and optionally `$this->editable` (array of fields allowed for insert/update).
 */
trait Model
{
    use Database;

    /**
     * The offset for pagination in SELECT queries.
     *
     * @var int
     */
    protected $offset = 0;

    /**
     * The limit for pagination in SELECT queries.
     *
     * @var int
     */
    protected $limit = 10;

    /**
     * Retrieve all records from the table.
     *
     * @return array The result set as an associative array.
     */
    public function findAll() {
        $query = "SELECT * FROM $this->table";
        $result = $this->query($query, [])->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Fetch records matching the given conditions, with optional exclusions.
     *
     * @param array $data Associative array of conditions (e.g. ['email' => 'a@a.com']).
     * @param array $exclude Optional associative array of values to exclude.
     * @return PDOStatement|false Result set on success, or false on failure.
     */
    public function where($data, $exclude = [])
    {
        $keys = array_keys($data);
        $excludeKeys = array_keys($exclude);

        $query = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $query .= "$key = :$key AND ";
        }

        if (!empty($exclude)) {
            foreach ($excludeKeys as $exKey) {
                $query .= "$exKey != :exclude_$exKey AND ";
            }
        }

        $query = rtrim($query, " AND ");
        $query .= " LIMIT $this->limit OFFSET $this->offset";

        $params = $data;
        foreach ($excludeKeys as $exKey) {
            $params["exclude_$exKey"] = $exclude[$exKey];
        }

        return $this->query($query, $params);
    }

    /**
     * Fetch a single record matching the given conditions.
     *
     * @param array $data Conditions to match.
     * @param array $exclude Optional exclusions.
     * @return array|false Single record as associative array or false if not found.
     */
    public function get($data, $exclude = [])
    {
        $keys = array_keys($data);
        $excludeKeys = array_keys($exclude);

        $query = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $query .= "$key = :$key AND ";
        }

        if (!empty($exclude)) {
            foreach ($excludeKeys as $exKey) {
                $query .= "$exKey != :exclude_$exKey AND ";
            }
        }

        $query = rtrim($query, " AND ");
        $query .= " LIMIT $this->limit OFFSET $this->offset";

        $params = $data;
        foreach ($excludeKeys as $exKey) {
            $params["exclude_$exKey"] = $exclude[$exKey];
        }

        $result = $this->query($query, $params);
        $data = $result->fetch(PDO::FETCH_ASSOC);

        return $data ?: false;
    }

    /**
     * Insert a new record into the table.
     *
     * Only fields in `$this->editable` will be inserted.
     *
     * @param array $data Associative array of data to insert.
     * @return void
     */
    public function insert($data)
    {
        if (!empty($this->editable)) {
            foreach ($data as $keys => $value) {
                if (!in_array($keys, $this->editable)) {
                    unset($data[$keys]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "INSERT INTO $this->table (" . implode(', ', $keys) . ") VALUES (:" . implode(', :', $keys) . ")";
        $this->query($query, $data);
    }

    /**
     * Update an existing record in the table by ID.
     *
     * Only fields in `$this->editable` will be updated.
     *
     * @param array $data Associative array of data to update.
     * @param mixed $id The ID of the record to update.
     * @return void
     */
    public function update($data, $id)
    {
        if (!empty($this->editable)) {
            foreach ($data as $keys => $value) {
                if (!in_array($keys, $this->editable)) {
                    unset($data[$keys]);
                }
            }
        }

        $setPart = "";
        foreach ($data as $key => $value) {
            $setPart .= "$key = :$key, ";
        }

        $setPart = rtrim($setPart, ", ");
        $query = "UPDATE $this->table SET $setPart WHERE id = :id";

        $params = $data;
        $params['id'] = $id;

        $this->query($query, $params);
    }

    /**
     * Delete a record by its ID.
     *
     * @param mixed $id The ID of the record to delete.
     * @return void
     */
    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->query($query, ['id' => $id]);
    }
}
