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
            'schemaTypes\\cw\\' => 15,
            'schemaTypes\\' => 12,
            'schemaFunctions\\' => 16,
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
        'schemaFunctions\\Pressbooks_Metadata_Create_Metabox' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-create-metabox.php',
        'schemaFunctions\\Pressbooks_Metadata_Engine' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-engine.php',
        'schemaFunctions\\Pressbooks_Metadata_General_Functions' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-general-functions.php',
        'schemaFunctions\\Pressbooks_Metadata_Output' => __DIR__ . '/../..' . '/admin/schemaFunctions/class-pressbooks-metadata-output.php',
        'schemaTypes\\Pressbooks_Metadata_CreativeWork' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-creativeWork.php',
        'schemaTypes\\Pressbooks_Metadata_Thing' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-thing.php',
        'schemaTypes\\Pressbooks_Metadata_Type' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-type.php',
        'schemaTypes\\Pressbooks_Metadata_Type_Structure' => __DIR__ . '/../..' . '/admin/schemaTypes/class-pressbooks-metadata-type-structure.php',
        'schemaTypes\\action\\Pressbooks_Metadata_Action' => __DIR__ . '/../..' . '/admin/schemaTypes/action/class-pressbooks-metadata-Action.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Article' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-article.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Blog' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-blog.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Book' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-books.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_ClaimReview' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-claimReview.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Clip' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-clip.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Comment' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-comment.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Course' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-course.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Creative_Work_Season' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-creativeWorkSeason.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Creative_Work_Series' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-creativeWorkSeries.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Data_Catalog' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-dataCatalog.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Data_Set' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-dataSet.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Digital_Document' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-digitalDocument.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Educational' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-educational.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_EmailMessage' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-emailMessage.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Empty_Type' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-emptyType.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Episode' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-episode.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Game' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-game.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Map' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-map.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Media_Object' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-mediaObject.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Menu' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-menu.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Menu_Section' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-menuSection.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Message' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-message.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Movie' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-movie.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_MusicAlbum' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-musicAlbum.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_MusicRelease' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-musicRelease.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Music_Composition' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-musicComposition.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Music_Playlist' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-musicPlaylist.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Music_Recording' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-musicRecording.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Publication_Issue' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-publicationIssue.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Publication_Volume' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-publicationVolume.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Question' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-question.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Recipe' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-recipe.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Review' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-review.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Software_Application' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-softwareApplication.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Software_Source_Code' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-softwareSourceCode.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Tv_Season' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-tvSeason.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Tv_Series' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-tvSeries.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_Visual_Art_Work' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-visualArtWork.php',
        'schemaTypes\\cw\\Pressbooks_Metadata_WebPage' => __DIR__ . '/../..' . '/admin/schemaTypes/creativeWorks/class-pressbooks-metadata-webPage.php',
        'schemaTypes\\event\\Pressbooks_Metadata_Event' => __DIR__ . '/../..' . '/admin/schemaTypes/event/class-pressbooks-metadata-Event.php',
        'schemaTypes\\intangible\\Pressbooks_Metadata_Intangible' => __DIR__ . '/../..' . '/admin/schemaTypes/intangible/class-pressbooks-metadata-Intangible.php',
        'schemaTypes\\organisation\\Pressbooks_Metadata_Organization' => __DIR__ . '/../..' . '/admin/schemaTypes/organisation/class-pressbooks-metadata-Organization.php',
        'schemaTypes\\person\\Pressbooks_Metadata_Person' => __DIR__ . '/../..' . '/admin/schemaTypes/person/class-pressbooks-metadata-Person.php',
        'schemaTypes\\place\\Pressbooks_Metadata_Place' => __DIR__ . '/../..' . '/admin/schemaTypes/place/class-pressbooks-metadata-Place.php',
        'schemaTypes\\product\\Pressbooks_Metadata_Product' => __DIR__ . '/../..' . '/admin/schemaTypes/product/class-pressbooks-metadata-Product.php',
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
