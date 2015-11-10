<?php


/**
 * Base class that represents a query for the 'visitadetalle' table.
 *
 *
 *
 * @method VisitadetalleQuery orderByIdvisitadetalle($order = Criteria::ASC) Order by the idvisitadetalle column
 * @method VisitadetalleQuery orderByIdvisita($order = Criteria::ASC) Order by the idvisita column
 * @method VisitadetalleQuery orderByIdproductoclinica($order = Criteria::ASC) Order by the idproductoclinica column
 * @method VisitadetalleQuery orderByIdservicioclinica($order = Criteria::ASC) Order by the idservicioclinica column
 * @method VisitadetalleQuery orderByIdmembresia($order = Criteria::ASC) Order by the idmembresia column
 * @method VisitadetalleQuery orderByVisitadetalleCargo($order = Criteria::ASC) Order by the visitadetalle_cargo column
 * @method VisitadetalleQuery orderByVisitadetallePreciounitario($order = Criteria::ASC) Order by the visitadetalle_preciounitario column
 * @method VisitadetalleQuery orderByVisitadetalleCantidad($order = Criteria::ASC) Order by the visitadetalle_cantidad column
 * @method VisitadetalleQuery orderByVisitadetalleSubtotal($order = Criteria::ASC) Order by the visitadetalle_subtotal column
 *
 * @method VisitadetalleQuery groupByIdvisitadetalle() Group by the idvisitadetalle column
 * @method VisitadetalleQuery groupByIdvisita() Group by the idvisita column
 * @method VisitadetalleQuery groupByIdproductoclinica() Group by the idproductoclinica column
 * @method VisitadetalleQuery groupByIdservicioclinica() Group by the idservicioclinica column
 * @method VisitadetalleQuery groupByIdmembresia() Group by the idmembresia column
 * @method VisitadetalleQuery groupByVisitadetalleCargo() Group by the visitadetalle_cargo column
 * @method VisitadetalleQuery groupByVisitadetallePreciounitario() Group by the visitadetalle_preciounitario column
 * @method VisitadetalleQuery groupByVisitadetalleCantidad() Group by the visitadetalle_cantidad column
 * @method VisitadetalleQuery groupByVisitadetalleSubtotal() Group by the visitadetalle_subtotal column
 *
 * @method VisitadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VisitadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VisitadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VisitadetalleQuery leftJoinMembresia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Membresia relation
 * @method VisitadetalleQuery rightJoinMembresia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Membresia relation
 * @method VisitadetalleQuery innerJoinMembresia($relationAlias = null) Adds a INNER JOIN clause to the query using the Membresia relation
 *
 * @method VisitadetalleQuery leftJoinProductoclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productoclinica relation
 * @method VisitadetalleQuery rightJoinProductoclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productoclinica relation
 * @method VisitadetalleQuery innerJoinProductoclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Productoclinica relation
 *
 * @method VisitadetalleQuery leftJoinServicioclinica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioclinica relation
 * @method VisitadetalleQuery rightJoinServicioclinica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioclinica relation
 * @method VisitadetalleQuery innerJoinServicioclinica($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioclinica relation
 *
 * @method VisitadetalleQuery leftJoinVisita($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visita relation
 * @method VisitadetalleQuery rightJoinVisita($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visita relation
 * @method VisitadetalleQuery innerJoinVisita($relationAlias = null) Adds a INNER JOIN clause to the query using the Visita relation
 *
 * @method VisitadetalleQuery leftJoinPacientemembresiadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientemembresiadetalle relation
 * @method VisitadetalleQuery rightJoinPacientemembresiadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientemembresiadetalle relation
 * @method VisitadetalleQuery innerJoinPacientemembresiadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientemembresiadetalle relation
 *
 * @method Visitadetalle findOne(PropelPDO $con = null) Return the first Visitadetalle matching the query
 * @method Visitadetalle findOneOrCreate(PropelPDO $con = null) Return the first Visitadetalle matching the query, or a new Visitadetalle object populated from the query conditions when no match is found
 *
 * @method Visitadetalle findOneByIdvisita(int $idvisita) Return the first Visitadetalle filtered by the idvisita column
 * @method Visitadetalle findOneByIdproductoclinica(int $idproductoclinica) Return the first Visitadetalle filtered by the idproductoclinica column
 * @method Visitadetalle findOneByIdservicioclinica(int $idservicioclinica) Return the first Visitadetalle filtered by the idservicioclinica column
 * @method Visitadetalle findOneByIdmembresia(int $idmembresia) Return the first Visitadetalle filtered by the idmembresia column
 * @method Visitadetalle findOneByVisitadetalleCargo(string $visitadetalle_cargo) Return the first Visitadetalle filtered by the visitadetalle_cargo column
 * @method Visitadetalle findOneByVisitadetallePreciounitario(string $visitadetalle_preciounitario) Return the first Visitadetalle filtered by the visitadetalle_preciounitario column
 * @method Visitadetalle findOneByVisitadetalleCantidad(string $visitadetalle_cantidad) Return the first Visitadetalle filtered by the visitadetalle_cantidad column
 * @method Visitadetalle findOneByVisitadetalleSubtotal(string $visitadetalle_subtotal) Return the first Visitadetalle filtered by the visitadetalle_subtotal column
 *
 * @method array findByIdvisitadetalle(int $idvisitadetalle) Return Visitadetalle objects filtered by the idvisitadetalle column
 * @method array findByIdvisita(int $idvisita) Return Visitadetalle objects filtered by the idvisita column
 * @method array findByIdproductoclinica(int $idproductoclinica) Return Visitadetalle objects filtered by the idproductoclinica column
 * @method array findByIdservicioclinica(int $idservicioclinica) Return Visitadetalle objects filtered by the idservicioclinica column
 * @method array findByIdmembresia(int $idmembresia) Return Visitadetalle objects filtered by the idmembresia column
 * @method array findByVisitadetalleCargo(string $visitadetalle_cargo) Return Visitadetalle objects filtered by the visitadetalle_cargo column
 * @method array findByVisitadetallePreciounitario(string $visitadetalle_preciounitario) Return Visitadetalle objects filtered by the visitadetalle_preciounitario column
 * @method array findByVisitadetalleCantidad(string $visitadetalle_cantidad) Return Visitadetalle objects filtered by the visitadetalle_cantidad column
 * @method array findByVisitadetalleSubtotal(string $visitadetalle_subtotal) Return Visitadetalle objects filtered by the visitadetalle_subtotal column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseVisitadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVisitadetalleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'feetcent_feetcenter';
        }
        if (null === $modelName) {
            $modelName = 'Visitadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VisitadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VisitadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VisitadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VisitadetalleQuery) {
            return $criteria;
        }
        $query = new VisitadetalleQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Visitadetalle|Visitadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VisitadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VisitadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Visitadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdvisitadetalle($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Visitadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idvisitadetalle`, `idvisita`, `idproductoclinica`, `idservicioclinica`, `idmembresia`, `visitadetalle_cargo`, `visitadetalle_preciounitario`, `visitadetalle_cantidad`, `visitadetalle_subtotal` FROM `visitadetalle` WHERE `idvisitadetalle` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Visitadetalle();
            $obj->hydrate($row);
            VisitadetallePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Visitadetalle|Visitadetalle[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Visitadetalle[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idvisitadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisitadetalle(1234); // WHERE idvisitadetalle = 1234
     * $query->filterByIdvisitadetalle(array(12, 34)); // WHERE idvisitadetalle IN (12, 34)
     * $query->filterByIdvisitadetalle(array('min' => 12)); // WHERE idvisitadetalle >= 12
     * $query->filterByIdvisitadetalle(array('max' => 12)); // WHERE idvisitadetalle <= 12
     * </code>
     *
     * @param     mixed $idvisitadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByIdvisitadetalle($idvisitadetalle = null, $comparison = null)
    {
        if (is_array($idvisitadetalle)) {
            $useMinMax = false;
            if (isset($idvisitadetalle['min'])) {
                $this->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $idvisitadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisitadetalle['max'])) {
                $this->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $idvisitadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $idvisitadetalle, $comparison);
    }

    /**
     * Filter the query on the idvisita column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvisita(1234); // WHERE idvisita = 1234
     * $query->filterByIdvisita(array(12, 34)); // WHERE idvisita IN (12, 34)
     * $query->filterByIdvisita(array('min' => 12)); // WHERE idvisita >= 12
     * $query->filterByIdvisita(array('max' => 12)); // WHERE idvisita <= 12
     * </code>
     *
     * @see       filterByVisita()
     *
     * @param     mixed $idvisita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByIdvisita($idvisita = null, $comparison = null)
    {
        if (is_array($idvisita)) {
            $useMinMax = false;
            if (isset($idvisita['min'])) {
                $this->addUsingAlias(VisitadetallePeer::IDVISITA, $idvisita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvisita['max'])) {
                $this->addUsingAlias(VisitadetallePeer::IDVISITA, $idvisita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::IDVISITA, $idvisita, $comparison);
    }

    /**
     * Filter the query on the idproductoclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductoclinica(1234); // WHERE idproductoclinica = 1234
     * $query->filterByIdproductoclinica(array(12, 34)); // WHERE idproductoclinica IN (12, 34)
     * $query->filterByIdproductoclinica(array('min' => 12)); // WHERE idproductoclinica >= 12
     * $query->filterByIdproductoclinica(array('max' => 12)); // WHERE idproductoclinica <= 12
     * </code>
     *
     * @see       filterByProductoclinica()
     *
     * @param     mixed $idproductoclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductoclinica($idproductoclinica = null, $comparison = null)
    {
        if (is_array($idproductoclinica)) {
            $useMinMax = false;
            if (isset($idproductoclinica['min'])) {
                $this->addUsingAlias(VisitadetallePeer::IDPRODUCTOCLINICA, $idproductoclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoclinica['max'])) {
                $this->addUsingAlias(VisitadetallePeer::IDPRODUCTOCLINICA, $idproductoclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::IDPRODUCTOCLINICA, $idproductoclinica, $comparison);
    }

    /**
     * Filter the query on the idservicioclinica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicioclinica(1234); // WHERE idservicioclinica = 1234
     * $query->filterByIdservicioclinica(array(12, 34)); // WHERE idservicioclinica IN (12, 34)
     * $query->filterByIdservicioclinica(array('min' => 12)); // WHERE idservicioclinica >= 12
     * $query->filterByIdservicioclinica(array('max' => 12)); // WHERE idservicioclinica <= 12
     * </code>
     *
     * @see       filterByServicioclinica()
     *
     * @param     mixed $idservicioclinica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByIdservicioclinica($idservicioclinica = null, $comparison = null)
    {
        if (is_array($idservicioclinica)) {
            $useMinMax = false;
            if (isset($idservicioclinica['min'])) {
                $this->addUsingAlias(VisitadetallePeer::IDSERVICIOCLINICA, $idservicioclinica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicioclinica['max'])) {
                $this->addUsingAlias(VisitadetallePeer::IDSERVICIOCLINICA, $idservicioclinica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::IDSERVICIOCLINICA, $idservicioclinica, $comparison);
    }

    /**
     * Filter the query on the idmembresia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmembresia(1234); // WHERE idmembresia = 1234
     * $query->filterByIdmembresia(array(12, 34)); // WHERE idmembresia IN (12, 34)
     * $query->filterByIdmembresia(array('min' => 12)); // WHERE idmembresia >= 12
     * $query->filterByIdmembresia(array('max' => 12)); // WHERE idmembresia <= 12
     * </code>
     *
     * @see       filterByMembresia()
     *
     * @param     mixed $idmembresia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByIdmembresia($idmembresia = null, $comparison = null)
    {
        if (is_array($idmembresia)) {
            $useMinMax = false;
            if (isset($idmembresia['min'])) {
                $this->addUsingAlias(VisitadetallePeer::IDMEMBRESIA, $idmembresia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmembresia['max'])) {
                $this->addUsingAlias(VisitadetallePeer::IDMEMBRESIA, $idmembresia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::IDMEMBRESIA, $idmembresia, $comparison);
    }

    /**
     * Filter the query on the visitadetalle_cargo column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitadetalleCargo('fooValue');   // WHERE visitadetalle_cargo = 'fooValue'
     * $query->filterByVisitadetalleCargo('%fooValue%'); // WHERE visitadetalle_cargo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitadetalleCargo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByVisitadetalleCargo($visitadetalleCargo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitadetalleCargo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitadetalleCargo)) {
                $visitadetalleCargo = str_replace('*', '%', $visitadetalleCargo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_CARGO, $visitadetalleCargo, $comparison);
    }

    /**
     * Filter the query on the visitadetalle_preciounitario column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitadetallePreciounitario(1234); // WHERE visitadetalle_preciounitario = 1234
     * $query->filterByVisitadetallePreciounitario(array(12, 34)); // WHERE visitadetalle_preciounitario IN (12, 34)
     * $query->filterByVisitadetallePreciounitario(array('min' => 12)); // WHERE visitadetalle_preciounitario >= 12
     * $query->filterByVisitadetallePreciounitario(array('max' => 12)); // WHERE visitadetalle_preciounitario <= 12
     * </code>
     *
     * @param     mixed $visitadetallePreciounitario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByVisitadetallePreciounitario($visitadetallePreciounitario = null, $comparison = null)
    {
        if (is_array($visitadetallePreciounitario)) {
            $useMinMax = false;
            if (isset($visitadetallePreciounitario['min'])) {
                $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO, $visitadetallePreciounitario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitadetallePreciounitario['max'])) {
                $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO, $visitadetallePreciounitario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_PRECIOUNITARIO, $visitadetallePreciounitario, $comparison);
    }

    /**
     * Filter the query on the visitadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitadetalleCantidad(1234); // WHERE visitadetalle_cantidad = 1234
     * $query->filterByVisitadetalleCantidad(array(12, 34)); // WHERE visitadetalle_cantidad IN (12, 34)
     * $query->filterByVisitadetalleCantidad(array('min' => 12)); // WHERE visitadetalle_cantidad >= 12
     * $query->filterByVisitadetalleCantidad(array('max' => 12)); // WHERE visitadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $visitadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByVisitadetalleCantidad($visitadetalleCantidad = null, $comparison = null)
    {
        if (is_array($visitadetalleCantidad)) {
            $useMinMax = false;
            if (isset($visitadetalleCantidad['min'])) {
                $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_CANTIDAD, $visitadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitadetalleCantidad['max'])) {
                $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_CANTIDAD, $visitadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_CANTIDAD, $visitadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the visitadetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitadetalleSubtotal(1234); // WHERE visitadetalle_subtotal = 1234
     * $query->filterByVisitadetalleSubtotal(array(12, 34)); // WHERE visitadetalle_subtotal IN (12, 34)
     * $query->filterByVisitadetalleSubtotal(array('min' => 12)); // WHERE visitadetalle_subtotal >= 12
     * $query->filterByVisitadetalleSubtotal(array('max' => 12)); // WHERE visitadetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $visitadetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function filterByVisitadetalleSubtotal($visitadetalleSubtotal = null, $comparison = null)
    {
        if (is_array($visitadetalleSubtotal)) {
            $useMinMax = false;
            if (isset($visitadetalleSubtotal['min'])) {
                $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_SUBTOTAL, $visitadetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitadetalleSubtotal['max'])) {
                $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_SUBTOTAL, $visitadetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VisitadetallePeer::VISITADETALLE_SUBTOTAL, $visitadetalleSubtotal, $comparison);
    }

    /**
     * Filter the query by a related Membresia object
     *
     * @param   Membresia|PropelObjectCollection $membresia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMembresia($membresia, $comparison = null)
    {
        if ($membresia instanceof Membresia) {
            return $this
                ->addUsingAlias(VisitadetallePeer::IDMEMBRESIA, $membresia->getIdmembresia(), $comparison);
        } elseif ($membresia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitadetallePeer::IDMEMBRESIA, $membresia->toKeyValue('PrimaryKey', 'Idmembresia'), $comparison);
        } else {
            throw new PropelException('filterByMembresia() only accepts arguments of type Membresia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Membresia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function joinMembresia($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Membresia');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Membresia');
        }

        return $this;
    }

    /**
     * Use the Membresia relation Membresia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MembresiaQuery A secondary query class using the current class as primary query
     */
    public function useMembresiaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMembresia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Membresia', 'MembresiaQuery');
    }

    /**
     * Filter the query by a related Productoclinica object
     *
     * @param   Productoclinica|PropelObjectCollection $productoclinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoclinica($productoclinica, $comparison = null)
    {
        if ($productoclinica instanceof Productoclinica) {
            return $this
                ->addUsingAlias(VisitadetallePeer::IDPRODUCTOCLINICA, $productoclinica->getIdproductoclinica(), $comparison);
        } elseif ($productoclinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitadetallePeer::IDPRODUCTOCLINICA, $productoclinica->toKeyValue('PrimaryKey', 'Idproductoclinica'), $comparison);
        } else {
            throw new PropelException('filterByProductoclinica() only accepts arguments of type Productoclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productoclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function joinProductoclinica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productoclinica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Productoclinica');
        }

        return $this;
    }

    /**
     * Use the Productoclinica relation Productoclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoclinicaQuery A secondary query class using the current class as primary query
     */
    public function useProductoclinicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProductoclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productoclinica', 'ProductoclinicaQuery');
    }

    /**
     * Filter the query by a related Servicioclinica object
     *
     * @param   Servicioclinica|PropelObjectCollection $servicioclinica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioclinica($servicioclinica, $comparison = null)
    {
        if ($servicioclinica instanceof Servicioclinica) {
            return $this
                ->addUsingAlias(VisitadetallePeer::IDSERVICIOCLINICA, $servicioclinica->getIdservicioclinica(), $comparison);
        } elseif ($servicioclinica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitadetallePeer::IDSERVICIOCLINICA, $servicioclinica->toKeyValue('PrimaryKey', 'Idservicioclinica'), $comparison);
        } else {
            throw new PropelException('filterByServicioclinica() only accepts arguments of type Servicioclinica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicioclinica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function joinServicioclinica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicioclinica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Servicioclinica');
        }

        return $this;
    }

    /**
     * Use the Servicioclinica relation Servicioclinica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioclinicaQuery A secondary query class using the current class as primary query
     */
    public function useServicioclinicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinServicioclinica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicioclinica', 'ServicioclinicaQuery');
    }

    /**
     * Filter the query by a related Visita object
     *
     * @param   Visita|PropelObjectCollection $visita The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVisita($visita, $comparison = null)
    {
        if ($visita instanceof Visita) {
            return $this
                ->addUsingAlias(VisitadetallePeer::IDVISITA, $visita->getIdvisita(), $comparison);
        } elseif ($visita instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VisitadetallePeer::IDVISITA, $visita->toKeyValue('PrimaryKey', 'Idvisita'), $comparison);
        } else {
            throw new PropelException('filterByVisita() only accepts arguments of type Visita or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Visita relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function joinVisita($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Visita');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Visita');
        }

        return $this;
    }

    /**
     * Use the Visita relation Visita object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VisitaQuery A secondary query class using the current class as primary query
     */
    public function useVisitaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVisita($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Visita', 'VisitaQuery');
    }

    /**
     * Filter the query by a related Pacientemembresiadetalle object
     *
     * @param   Pacientemembresiadetalle|PropelObjectCollection $pacientemembresiadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VisitadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientemembresiadetalle($pacientemembresiadetalle, $comparison = null)
    {
        if ($pacientemembresiadetalle instanceof Pacientemembresiadetalle) {
            return $this
                ->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $pacientemembresiadetalle->getIdvisitadetalle(), $comparison);
        } elseif ($pacientemembresiadetalle instanceof PropelObjectCollection) {
            return $this
                ->usePacientemembresiadetalleQuery()
                ->filterByPrimaryKeys($pacientemembresiadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacientemembresiadetalle() only accepts arguments of type Pacientemembresiadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientemembresiadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function joinPacientemembresiadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientemembresiadetalle');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Pacientemembresiadetalle');
        }

        return $this;
    }

    /**
     * Use the Pacientemembresiadetalle relation Pacientemembresiadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientemembresiadetalleQuery A secondary query class using the current class as primary query
     */
    public function usePacientemembresiadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientemembresiadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientemembresiadetalle', 'PacientemembresiadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Visitadetalle $visitadetalle Object to remove from the list of results
     *
     * @return VisitadetalleQuery The current query, for fluid interface
     */
    public function prune($visitadetalle = null)
    {
        if ($visitadetalle) {
            $this->addUsingAlias(VisitadetallePeer::IDVISITADETALLE, $visitadetalle->getIdvisitadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
