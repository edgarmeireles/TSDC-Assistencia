<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80e65b4e177fc750e245b676c5d13a04
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' =>
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' =>
        array (
            'Psr\\Log\\' => 8,
        ),
        'D' =>
        array (
            'DebugBar\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' =>
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' =>
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Log\\' =>
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'DebugBar\\' =>
        array (
            0 => __DIR__ . '/..' . '/maximebf/debugbar/src/DebugBar',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' =>
        array (
            'org\\bovigo\\vfs' =>
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'CGIF' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFCOLORTABLE' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFFILEHEADER' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFIMAGE' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFIMAGEHEADER' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'CGIFLZW' => __DIR__ . '/..' . '/mpdf/mpdf/classes/gif.php',
        'FPDF_TPL' => __DIR__ . '/..' . '/setasign/fpdi/fpdf_tpl.php',
        'FPDI' => __DIR__ . '/..' . '/setasign/fpdi/fpdi.php',
        'FilterASCII85' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCII85.php',
        'FilterASCIIHexDecode' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCIIHexDecode.php',
        'FilterLZW' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterLZW.php',
        'INDIC' => __DIR__ . '/..' . '/mpdf/mpdf/classes/indic.php',
        'MYANMAR' => __DIR__ . '/..' . '/mpdf/mpdf/classes/myanmar.php',
        'OTLdump' => __DIR__ . '/..' . '/mpdf/mpdf/classes/otl_dump.php',
        'PDFBarcode' => __DIR__ . '/..' . '/mpdf/mpdf/classes/barcode.php',
        'SEA' => __DIR__ . '/..' . '/mpdf/mpdf/classes/sea.php',
        'SVG' => __DIR__ . '/..' . '/mpdf/mpdf/classes/svg.php',
        'TTFontFile' => __DIR__ . '/..' . '/mpdf/mpdf/classes/ttfontsuni.php',
        'TTFontFile_Analysis' => __DIR__ . '/..' . '/mpdf/mpdf/classes/ttfontsuni_analysis.php',
        'UCDN' => __DIR__ . '/..' . '/mpdf/mpdf/classes/ucdn.php',
        'bmp' => __DIR__ . '/..' . '/mpdf/mpdf/classes/bmp.php',
        'cssmgr' => __DIR__ . '/..' . '/mpdf/mpdf/classes/cssmgr.php',
        'directw' => __DIR__ . '/..' . '/mpdf/mpdf/classes/directw.php',
        'fpdi_pdf_parser' => __DIR__ . '/..' . '/setasign/fpdi/fpdi_pdf_parser.php',
        'grad' => __DIR__ . '/..' . '/mpdf/mpdf/classes/grad.php',
        'mPDF' => __DIR__ . '/..' . '/mpdf/mpdf/mpdf.php',
        'meter' => __DIR__ . '/..' . '/mpdf/mpdf/classes/meter.php',
        'mpdfform' => __DIR__ . '/..' . '/mpdf/mpdf/classes/mpdfform.php',
        'otl' => __DIR__ . '/..' . '/mpdf/mpdf/classes/otl.php',
        'pdf_context' => __DIR__ . '/..' . '/setasign/fpdi/pdf_context.php',
        'tocontents' => __DIR__ . '/..' . '/mpdf/mpdf/classes/tocontents.php',
        'wmf' => __DIR__ . '/..' . '/mpdf/mpdf/classes/wmf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80e65b4e177fc750e245b676c5d13a04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80e65b4e177fc750e245b676c5d13a04::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit80e65b4e177fc750e245b676c5d13a04::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit80e65b4e177fc750e245b676c5d13a04::$classMap;

        }, null, ClassLoader::class);
    }
}