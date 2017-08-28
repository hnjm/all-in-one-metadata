<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b45f2627b90d93643d5c14f1b35257a
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vocabularyFunctions\\' => 20,
        ),
        's' => 
        array (
            'settings\\' => 9,
            'schemaTypes\\organization\\' => 25,
            'schemaTypes\\cw\\' => 15,
            'schemaTypes\\' => 12,
            'schemaFunctions\\' => 16,
        ),
        'n' => 
        array (
            'networkFunctions\\' => 17,
        ),
        'a' => 
        array (
            'adminFunctions\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vocabularyFunctions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/vocabularyFunctions',
        ),
        'settings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/settings',
        ),
        'schemaTypes\\organization\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/schemaTypesorganization',
        ),
        'schemaTypes\\cw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks',
        ),
        'schemaTypes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/schemaTypes',
        ),
        'schemaFunctions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/schemaFunctions',
        ),
        'networkFunctions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/networkFunctions',
        ),
        'adminFunctions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/adminFunctions',
        ),
    );

    public static $classMap = array (
        'adminFunctions\\Pressbooks_Metadata_Importing' => __DIR__ . '/../..' . '/admin/adminFunctions/class-pressbooks-metadata-importing.php',
        'adminFunctions\\Pressbooks_Metadata_Options' => __DIR__ . '/../..' . '/admin/adminFunctions/class-pressbooks-metadata-options.php',
        'adminFunctions\\Pressbooks_Metadata_Required_Plugins' => __DIR__ . '/../..' . '/admin/adminFunctions/class-pressbooks-metadata-required-plugins.php',
        'adminFunctions\\Pressbooks_Metadata_Site_Cpt' => __DIR__ . '/../..' . '/admin/adminFunctions/class-pressbooks-metadata-site-cpt.php',
        'networkFunctions\\Pressbooks_Metadata_Net_Sett_Sections' => __DIR__ . '/../..' . '/admin/networkFunctions/class-pressbooks-metadata-net-sett-sections.php',
        'networkFunctions\\Pressbooks_Metadata_Network_Admin' => __DIR__ . '/../..' . '/admin/networkFunctions/class-pressbooks-metadata-network-admin.php',
        'schemaFunctions\\Pressbooks_Metadata_Create_Metabox' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-create-metabox.php',
        'schemaFunctions\\Pressbooks_Metadata_Engine' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-engine.php',
        'schemaFunctions\\Pressbooks_Metadata_General_Functions' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-general-functions.php',
        'schemaFunctions\\Pressbooks_Metadata_Output' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-output.php',
        'schemaFunctions\\Pressbooks_Metadata_Property_Overwrite' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-property-overwrite.php',
        'schemaTypes\\Pressbooks_Metadata_CreativeWork' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-creativeWork.php',
        'schemaTypes\\Pressbooks_Metadata_Organization' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-organization.php',
        'schemaTypes\\Pressbooks_Metadata_Thing' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-thing.php',
        'schemaTypes\\Pressbooks_Metadata_Type' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-type.php',
        'schemaTypes\\Pressbooks_Metadata_Type_Structure' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-type-structure.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Blog' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-blog.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Book' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-books.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Educational' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-educational.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Message' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-message.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_Airline' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-airline.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_Corporation' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-corporation.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_EducationalOrganization' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-educationalOrganization.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_LocalBusiness' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-localBusiness.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_MedicalOrganization' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-medicalOrganization.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_PerformingGroup' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-performingGroup.php',
        'schemaTypes\\organization\\Pressbooks_Metadata_SportsOrganization' => __DIR__ . '/../..' . '/admin/schemaTypes/organization/class-pressbooks-metadata-sportsOrganization.php',
        'settings\\Pressbooks_Metadata_Fields' => __DIR__ . '/../..' . '/admin/settings/class-pressbooks-metadata-type-fields.php',
        'settings\\Pressbooks_Metadata_Post_Type_Fields' => __DIR__ . '/../..' . '/admin/settings/class-pressbooks-metadata-post-types-fields.php',
        'settings\\Pressbooks_Metadata_Property_Fields' => __DIR__ . '/../..' . '/admin/settings/class-pressbooks-metadata-property-fields.php',
        'settings\\Pressbooks_Metadata_Sections' => __DIR__ . '/../..' . '/admin/settings/class-pressbooks-metadata-sections.php',
        'vocabularyFunctions\\Pressbooks_Metadata_Coins' => __DIR__ . '/../..' . '/admin/vocabularyFunctions/class-pressbooks-metadata-coins.php',
        'vocabularyFunctions\\Pressbooks_Metadata_Dublin' => __DIR__ . '/../..' . '/admin/vocabularyFunctions/class-pressbooks-metadata-dublin.php',
        'vocabularyFunctions\\Pressbooks_Metadata_Educational' => __DIR__ . '/../..' . '/admin/vocabularyFunctions/class-pressbooks-metadata-educational.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b45f2627b90d93643d5c14f1b35257a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b45f2627b90d93643d5c14f1b35257a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b45f2627b90d93643d5c14f1b35257a::$classMap;

        }, null, ClassLoader::class);
    }
}
