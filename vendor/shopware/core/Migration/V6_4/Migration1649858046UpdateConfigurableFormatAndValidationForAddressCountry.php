<?php declare(strict_types=1);

namespace Shopware\Core\Migration\V6_4;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * @internal
 */
#[Package('core')]
class Migration1649858046UpdateConfigurableFormatAndValidationForAddressCountry extends MigrationStep
{
    public const PATTERNS = [
        'AC' => '[Aa][Ss][Cc][Nn]\\s{0,1}[1][Zz][Zz]',
        'AD' => 'AD[1-7]0\\d',
        'AF' => '\\d{4}',
        'AI' => '(?:AI-)?2640',
        'AL' => '\\d{4}',
        'AM' => '(?:37)?\\d{4}',
        'AR' => '((?:[A-HJ-NP-Z])?\\d{4})([A-Z]{3})?',
        'AS' => '(96799)(?  :[ \\-](\\d{4}))?',
        'AT' => '\\d{4}',
        'AU' => '\\d{4}',
        'AX' => '22\\d{3}',
        'AZ' => '\\d{4}',
        'BA' => '\\d{5}',
        'BB' => 'BB\\d{5}',
        'BD' => '\\d{4}',
        'BE' => '\\d{4}',
        'BG' => '\\d{4}',
        'BH' => '(?:\\d|1[0-2])\\d{2}',
        'BL' => '9[78][01]\\d{2}',
        'BM' => '[A-Z]{2} ?[A-Z0-9]{2}',
        'BN' => '[A-Z]{2} ?\\d{4}',
        'BO' => '\\d{4}',
        'BR' => '\\d{5}-?\\d{3}',
        'BT' => '\\d{5}',
        'BY' => '\\d{6}',
        'CA' => '[ABCEGHJKLMNPRSTVXY]\\d[ABCEGHJ-NPRSTV-Z] ?\\d[ABCEGHJ-NPRSTV-Z]\\d',
        'CC' => '6799',
        'CD' => '[Cc][Dd]',
        'CH' => '[1-9]\\d{3}',
        'CL' => '\\d{7}',
        'CN' => '\\d{6}',
        'CO' => '\\d{6}',
        'CR' => '\\d{4,5}|\\d{3}-\\d{4}',
        'CU' => '\\d{5}',
        'CV' => '\\d{4}',
        'CX' => '6798',
        'CY' => '\\d{4}',
        'CZ' => '\\d{3} ?\\d{2}',
        'DE' => '\\d{5}',
        'DK' => '\\d{4}',
        'DO' => '\\d{5}',
        'DZ' => '\\d{5}',
        'EC' => '\\d{6}',
        'EE' => '\\d{5}',
        'EG' => '\\d{5}',
        'EH' => '\\d{5}',
        'ES' => '^([0-4]\\d{4}|5[0-2]\\d{3})$',
        'ET' => '\\d{4}',
        'FI' => '\\d{5}',
        'FK' => '[Ff][Ii][Qq]{2}\\s{0,1}[1][Zz]{2}',
        'FM' => '(9694[1-4])(?:[ \\-](\\d{4}))?',
        'FO' => '\\d{3}',
        'FR' => '\\d{1}(?:A|B|\\d{1}) ?\\d{3}',
        'GA' => '\\d{2}\\s[a-zA-Z-_ ]\\s\\d{2}',
        'GB' => '^GIR ?0AA$|^(?:(?:AB|AL|B|BA|BB|BD|BH|BL|BN|BR|BS|BT|BX|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|WV|YO|ZE)(?:\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}))$|^BFPO ?\\d{1,4}$',
        'GE' => '\\d{4}',
        'GF' => '9[78]3\\d{2}',
        'GG' => 'GY\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}',
        'GI' => '[Gg][Xx][1]{2}\\s{0,1}[1][Aa]{2}',
        'GL' => '39\\d{2}',
        'GN' => '\\d{3}',
        'GP' => '9[78][01]\\d{2}',
        'GR' => '\\d{3} ?\\d{2}',
        'GS' => '[Ss][Ii][Qq]{2}\\s{0,1}[1][Zz]{2}',
        'GT' => '\\d{5}',
        'GU' => '(969(?:[12]\\d|3[12]))(?:[ \\-](\\d{4}))?',
        'GW' => '\\d{4}',
        'HK' => '999077',
        'HM' => '\\d{4}',
        'HN' => '\\d{5}',
        'HR' => '\\d{5}',
        'HT' => '\\d{4}',
        'HU' => '\\d{4}',
        'ID' => '\\d{5}',
        'IE' => '[\\dA-Z]{3}( ?[\\dA-Z]{4})?',
        'IL' => '\\d{5}(?:\\d{2})?',
        'IM' => 'IM\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}',
        'IN' => '\\d{6}',
        'IO' => '[Bb]{2}[Nn][Dd]\\s{0,1}[1][Zz]{2}',
        'IQ' => '\\d{5}',
        'IR' => '\\d{5}-?\\d{5}',
        'IS' => '\\d{3}',
        'IT' => '\\d{5}',
        'JE' => 'JE\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}',
        'JM' => '[a-zA-Z]{2}',
        'JO' => '\\d{5}',
        'JP' => '\\d{3}-?\\d{4}',
        'KE' => '\\d{5}',
        'KG' => '\\d{6}',
        'KH' => '\\d{5}',
        'KR' => '\\d{3}(?:\\d{2}|-\\d{3})',
        'KW' => '\\d{5}',
        'KY' => 'KY\\d-\\d{4}',
        'KZ' => '\\d{6}',
        'LA' => '\\d{5}',
        'LB' => '(?:\\d{4})(?: ?(?:\\d{4}))?',
        'LI' => '948[5-9]|949[0-7]',
        'LK' => '\\d{5}',
        'LR' => '\\d{4}',
        'LS' => '\\d{3}',
        'LT' => '(LT-)?\\d{5}',
        'LU' => '\\d{4}',
        'LV' => '(LV-)?\\d{4}',
        'LY' => '\\d{5}',
        'MA' => '\\d{5}',
        'MC' => '980\\d{2}',
        'MD' => '\\d{4}',
        'ME' => '8\\d{4}',
        'MF' => '9[78][01]\\d{2}',
        'MG' => '\\d{3}',
        'MH' => '(969[67]\\d)(?:[ \\-](\\d{4}))?',
        'MK' => '\\d{4}',
        'MM' => '\\d{5}',
        'MN' => '\\d{5}',
        'MO' => '999078',
        'MP' => '(9695[012])(?:[ \\-](\\d{4}))?',
        'MQ' => '9[78]2\\d{2}',
        'MT' => '[A-Z]{3} ?\\d{2,4}',
        'MU' => '\\d{3}(?:\\d{2}|[A-Z]{2}\\d{3})',
        'MS' => '[Mm][Ss][Rr]\\s{0,1}\\d{4}',
        'MV' => '\\d{5}',
        'MX' => '\\d{5}',
        'MY' => '\\d{5}',
        'MZ' => '\\d{4}',
        'NA' => '\\d{5}',
        'NC' => '988\\d{2}',
        'NE' => '\\d{4}',
        'NF' => '2899',
        'NG' => '\\d{6}',
        'NI' => '\\d{5}',
        'NL' => '[1-9]{1}\\d{3}([ ]?[A-Z]{2})',
        'NO' => '\\d{4}',
        'NP' => '\\d{5}',
        'NZ' => '\\d{4}',
        'OM' => '(?:PC )?\\d{3}',
        'PA' => '\\d{4}',
        'PE' => '(?:LIMA \\d{1,2}|CALLAO 0?\\d)|[0-2]\\d{4}',
        'PF' => '987\\d{2}',
        'PG' => '\\d{3}',
        'PH' => '\\d{4}',
        'PK' => '\\d{5}',
        'PL' => '\\d{2}-\\d{3}',
        'PM' => '9[78]5\\d{2}',
        'PN' => 'PCRN 1ZZ',
        'PR' => '(00[679]\\d{2})(?:[ \\-](\\d{4}))?',
        'PT' => '\\d{4}-\\d{3}',
        'PW' => '(969(?:39|40))(?:[ \\-](\\d{4}))?',
        'PY' => '\\d{4}',
        'RE' => '9[78]4\\d{2}',
        'RO' => '\\d{6}',
        'RS' => '\\d{5,6}',
        'RU' => '\\d{6}',
        'SA' => '\\d{5}',
        'SD' => '\\d{5}',
        'SE' => '\\d{3} ?\\d{2}',
        'SG' => '\\d{6}',
        'SH' => '(?:ASCN|STHL) 1ZZ',
        'SI' => '\\d{4}',
        'SJ' => '\\d{4}',
        'SK' => '\\d{3} ?\\d{2}',
        'SM' => '4789\\d',
        'SN' => '\\d{5}',
        'SO' => '[A-Z]{2} ?\\d{5}',
        'SV' => 'CP [1-3][1-7][0-2]\\d',
        'SZ' => '[HLMS]\\d{3}',
        'TA' => 'TDCU 1ZZ',
        'TC' => 'TKCA 1ZZ',
        'TD' => '\\d{5}',
        'TH' => '\\d{5}',
        'TJ' => '\\d{6}',
        'TM' => '\\d{6}',
        'TN' => '\\d{4}',
        'TR' => '\\d{5}',
        'TT' => '\\d{6}',
        'TW' => '\\d{3}(?:\\d{2})?',
        'TZ' => '\\d{4,5}',
        'UA' => '\\d{5}',
        'UM' => '96898',
        'US' => '(\\d{5})(?:[ \\-](\\d{4}))?',
        'UY' => '\\d{5}',
        'UZ' => '\\d{6}',
        'VA' => '00120',
        'VC' => 'VC\\d{4}',
        'VE' => '\\d{4}',
        'VG' => 'VG\\d{4}',
        'VI' => '(008(?:(?:[0-4]\\d)|(?:5[01])))(?:[ \\-](\\d{4}))?',
        'VN' => '\\d{6}',
        'WF' => '986\\d{2}',
        'XK' => '[1-7]\\d{4}',
        'YT' => '976\\d{2}',
        'ZA' => '\\d{4}',
        'ZM' => '\\d{5}',
    ];

    public function getCreationTimestamp(): int
    {
        return 1649858046;
    }

    public function update(Connection $connection): void
    {
        $connection->executeUpdate('
            ALTER TABLE `country`
            ADD COLUMN `postal_code_required` TINYINT (1) NOT NULL DEFAULT 0 AFTER `company_tax`,
            ADD COLUMN `default_postal_code_pattern` VARCHAR (1024) NULL AFTER `company_tax`,
            ADD COLUMN `check_postal_code_pattern` TINYINT (1) NOT NULL DEFAULT 0 AFTER `company_tax`,
            ADD COLUMN `check_advanced_postal_code_pattern` TINYINT (1) NOT NULL DEFAULT 0 AFTER `company_tax`,
            ADD COLUMN `advanced_postal_code_pattern` VARCHAR (255) NULL AFTER `company_tax`;
        ');

        foreach (self::PATTERNS as $iso => $pattern) {
            $connection->executeStatement(
                'UPDATE `country` SET `default_postal_code_pattern` = :defaultPattern WHERE `iso` = :iso',
                [
                    'defaultPattern' => $pattern,
                    'iso' => $iso,
                ]
            );
        }
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
