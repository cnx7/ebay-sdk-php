<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ValueTypeCodeType
 *
 * This enumeration type is used by multiple Trading API calls, including <b>GetCategorySpecifics</b> call and order management calls (like <b>GetOrders</b>).
 *  <br/><br/>
 *  The values used by <b>GetCategorySpecifics</b> is the data type of the recommended Item Specific called out in the <b>NameRecommendation.Name</b> field.
 *  <br/><br/>
 *  The values used by <b>GetOrders</b> (and other order management calls) is the type of tax ID used in the <strong>BuyerTaxIdentifier</strong> container.
 * XSD Type: ValueTypeCodeType
 */
class ValueTypeCodeType
{
    /**
     * Constant for 'Decimal' value.
     *
     * This value indicates that the recommended Item Specific should have numeric
     * values with a decimal point, like 3.14159. Item Specific values cannot be
     * expressed as float or double types.
     */
    public const VAL_DECIMAL = 'Decimal';

    /**
     * Constant for 'Numeric' value.
     *
     * This value indicates that the recommended Item Specific should have integer
     * values (no decimal point), like 3. Item Specific values cannot be expressed as
     * float or double types.
     */
    public const VAL_NUMERIC = 'Numeric';

    /**
     * Constant for 'Text' value.
     *
     * This value indicates that the value(s) of the recommended Item Specific should
     * be free-form text. This is the default value. The maximum length of a text-based
     * Item Specific is general 65 characters, but instance aspects (like 'Bundle
     * Description' or 'California Prop 65 Warning') are allowed longer lengths.
     */
    public const VAL_TEXT = 'Text';

    /**
     * Constant for 'ISBN' value.
     *
     * This value indicates that the recommended Item Specific is an International
     * Standard Book Number (ISBN) value. ISBNs can contain either 10 or 13 characters.
     */
    public const VAL_ISBN = 'ISBN';

    /**
     * Constant for 'UPC' value.
     *
     * This value indicates that the recommended Item Specific is a Universal Product
     * Code (UPC) value. UPCs contain 12 characters.
     */
    public const VAL_UPC = 'UPC';

    /**
     * Constant for 'EAN' value.
     *
     * This value indicates that the recommended Item Specific is a European Article
     * Number (EAN). EANs contain 13 characters.
     */
    public const VAL_EAN = 'EAN';

    /**
     * Constant for 'Date' value.
     *
     * This value indicates that the value(s) of the recommended Item Specific is a
     * date value, which will should use the date format specified in the
     * <b>ValueFormat</b> field.
     */
    public const VAL_DATE = 'Date';

    /**
     * Constant for 'CodiceFiscale' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a Codice Fiscale
     * ID, which is an identifier used by the Italian government to identify taxpayers
     * in Italy.
     */
    public const VAL_CODICE_FISCALE = 'CodiceFiscale';

    /**
     * Constant for 'DNI' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a Spanish
     * National Identity Number, which is one identifier used by the Spanish government
     * to identify taxpayers in Spain. In Spanish, this ID is known as the 'Documento
     * nacional de identidad'. The other tax identifier for Spanish residents is the
     * NIE number, or 'Numero de Identidad de Extranjero'.
     */
    public const VAL_DNI = 'DNI';

    /**
     * Constant for 'RussianPassport' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a Russian
     * Passport number.
     */
    public const VAL_RUSSIAN_PASSPORT = 'RussianPassport';

    /**
     * Constant for 'CPFTaxID' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a Tax
     * Registration Number, which is an identifier used by the Brazilian government to
     * identify taxpayers in Brazil. In Portuguese, this ID is known as the 'Cadastro
     * de Pessoas Fisicas', or 'CPF'.
     */
    public const VAL_CPFTAX_ID = 'CPFTaxID';

    /**
     * Constant for 'TurkeyID' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a Turkish
     * Identification Number, which is an identifier used by the Turkish government to
     * identify taxpayers in Turkey. In Turkish, this ID is known as the 'Turkiye
     * Cumhuriyeti Kimlik Numarasi', often abbreviated as T.C. Kimlik No.
     */
    public const VAL_TURKEY_ID = 'TurkeyID';

    /**
     * Constant for 'NIE' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a NIE Number,
     * which is one identifier used by the Spanish government to identify taxpayers in
     * Spain. 'NIE' stands for 'Numero de Identidad de Extranjero'. The other tax
     * identifier for Spanish residents is the DNI number, or 'Documento nacional de
     * identidad'. Spanish residents can also be identified by their Spanish VAT
     * (Value-Added Tax) number, which is also called the 'Numero de Identificacion
     * Fiscal' or NIF.
     */
    public const VAL_NIE = 'NIE';

    /**
     * Constant for 'NIF' value.
     *
     * This value indicates that the ID in the <b>ID</b> field is an NIF Number, which
     * is also known as their Spanish VAT (Value-Added Tax) number. 'NIF' stands for
     * 'Numero de Identificacion Fiscal'. Spanish residents can also be identified by
     * their DNI ('Documento nacional de identidad') number or their NIE ('Numero de
     * Identidad de Extranjero') number.
     */
    public const VAL_NIF = 'NIF';

    /**
     * Constant for 'CEDULA' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a Cedula number,
     * which is an identifier used by the Chilean, Columbian, and Dominican Republic
     * governments to identify taxpayers in those countries. This ID is sometimes
     * referred to as a 'Cedula de Identidad'.
     */
    public const VAL_CEDULA = 'CEDULA';

    /**
     * Constant for 'NIT' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a NIT number,
     * which is an identifier used by the Guatemalan government to identify taxpayers
     * in Guatemala. In Spanish, this ID is known as the 'Numero de identificacion
     * tributaria'.
     */
    public const VAL_NIT = 'NIT';

    /**
     * Constant for 'DriverLicense' value.
     *
     * This value indicates that the identifier in the <b>ID</b> field is a driver's
     * license number.
     */
    public const VAL_DRIVER_LICENSE = 'DriverLicense';

    /**
     * Constant for 'CNPJ' value.
     *
     * This value indicates that the tax ID in the <b>ID</b> field is a CNPJ number,
     * which is an identifier used by the Brazilian government to identify taxpayers in
     * Brazil. In Portuguese, this ID is known as the 'Cadastro Nacional da Pessoa
     * Juridica'.
     */
    public const VAL_CNPJ = 'CNPJ';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
