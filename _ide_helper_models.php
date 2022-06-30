<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $thumbnail
 * @property string $image
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $image_url
 * @property-read string $thumbnail_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BlogTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Query\Builder|Blog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereVisible($value)
 * @method static \Illuminate\Database\Query\Builder|Blog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Blog withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BlogView[] $blog_views
 * @property-read int|null $blog_views_count
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Blog statusFilter($filter)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property int $blog_id
 * @property string $title
 * @property string $content
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $slug
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|BlogTranslation onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogTranslation withoutTrashed()
 */
	class BlogTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogView
 *
 * @property int $id
 * @property int $blog_id
 * @property string $ip
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @method static \Database\Factories\BlogViewFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlogView onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BlogView withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogView withoutTrashed()
 * @mixin \Eloquent
 * @property string $viewed_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogView whereViewedAt($value)
 */
	class BlogView extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property int $visible
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereVisible($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Category statusFilter($filter)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CategoryTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property int $category_id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Category $category
 */
	class CategoryTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Certificate
 *
 * @property int $id
 * @property string $image
 * @property int $order_no
 * @property int $visible
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereVisible($value)
 * @mixin \Eloquent
 * @property-read string $image_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CertificateTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Query\Builder|Certificate onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|Certificate withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Certificate withoutTrashed()
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate statusFilter($filter)
 */
	class Certificate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CertificateTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property int $certificate_id
 * @property string $title
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereCertificateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificateTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Certificate $certificate
 */
	class CertificateTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactMessage
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string $email
 * @property string $message
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ContactMessageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|ContactMessage onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContactMessage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContactMessage withoutTrashed()
 */
	class ContactMessage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FAQ
 *
 * @property int $id
 * @property int $order_no
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ newQuery()
 * @method static \Illuminate\Database\Query\Builder|FAQ onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ query()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ whereVisible($value)
 * @method static \Illuminate\Database\Query\Builder|FAQ withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FAQ withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FAQTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ searchFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQ statusFilter($filter)
 */
	class FAQ extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FAQTranslation
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $language_id
 * @property int $faq_id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\FAQ $faq
 * @method static \Illuminate\Database\Query\Builder|FAQTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereFaqId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FAQTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|FAQTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FAQTranslation withoutTrashed()
 */
	class FAQTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Query\Builder|Feature onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereVisible($value)
 * @method static \Illuminate\Database\Query\Builder|Feature withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Feature withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductFeature[] $product_features
 * @property-read int|null $product_features_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FeatureTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Feature statusFilter($filter)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FeatureTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property int $feature_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|FeatureTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|FeatureTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FeatureTranslation withoutTrashed()
 * @mixin \Eloquent
 * @property-read \App\Models\Feature $feature
 */
	class FeatureTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FreeQuota
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $phone
 * @property int $product_id
 * @property int $piece
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota newQuery()
 * @method static \Illuminate\Database\Query\Builder|FreeQuota onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota query()
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota wherePiece($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FreeQuota whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|FreeQuota withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FreeQuota withoutTrashed()
 * @mixin \Eloquent
 */
	class FreeQuota extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gallery
 *
 * @property int $id
 * @property string $image
 * @property int $order_no
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereVisible($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $image_url
 * @method static \Illuminate\Database\Query\Builder|Gallery onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Gallery withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Gallery withoutTrashed()
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery statusFilter($filter)
 */
	class Gallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $original_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereOriginalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageType
 *
 * @property int $id
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType newQuery()
 * @method static \Illuminate\Database\Query\Builder|PackageType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereVisible($value)
 * @method static \Illuminate\Database\Query\Builder|PackageType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PackageType withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductPackageType[] $product_package_types
 * @property-read int|null $product_package_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PackageTypeTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType statusFilter($filter)
 */
	class PackageType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageTypeTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property int $package_type_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|PackageTypeTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation wherePackageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageTypeTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PackageTypeTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PackageTypeTranslation withoutTrashed()
 * @mixin \Eloquent
 * @property-read \App\Models\PackageType $package_type
 */
	class PackageTypeTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $category_id
 * @property string $code
 * @property int $length
 * @property int $width
 * @property int|null $weight
 * @property string|null $thickness
 * @property int|null $blade_id
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBladeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWidth($value)
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductFeature[] $product_features
 * @property-read int|null $product_features_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductPackageType[] $product_package_types
 * @property-read int|null $product_package_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @property string $image
 * @property-read \App\Models\Category $category
 * @property-read string $image_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductCompatible[] $product_compatibles
 * @property-read int|null $product_compatibles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductImage[] $product_images
 * @property-read int|null $product_images_count
 * @property-read mixed $some_date
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Product productFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|Product statusFilter($filter)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductView[] $product_views
 * @property-read int|null $product_views_count
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCompatible
 *
 * @property int $id
 * @property int $product_id
 * @property int $blade_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $blade
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductCompatible onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible whereBladeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCompatible whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductCompatible withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductCompatible withoutTrashed()
 * @mixin \Eloquent
 */
	class ProductCompatible extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductFeature
 *
 * @property int $id
 * @property int $product_id
 * @property int $feature_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductFeature onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductFeature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductFeature withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductFeature withoutTrashed()
 * @mixin \Eloquent
 * @property-read \App\Models\Feature $feature
 * @property-read \App\Models\Product $product
 */
	class ProductFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductImage
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $thumbnail
 * @property-read string $image_url
 * @property-read string $thumbnail_url
 * @method static \Illuminate\Database\Query\Builder|ProductImage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereThumbnail($value)
 * @method static \Illuminate\Database\Query\Builder|ProductImage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductImage withoutTrashed()
 */
	class ProductImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductPackageType
 *
 * @property int $id
 * @property int $product_id
 * @property int $package_type_id
 * @property string|null $image
 * @property string|null $amount
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductPackageType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType wherePackageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPackageType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductPackageType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductPackageType withoutTrashed()
 * @mixin \Eloquent
 * @property-read string $image_url
 * @property-read \App\Models\PackageType $package_type
 * @property-read \App\Models\Product $product
 */
	class ProductPackageType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property int $product_id
 * @property string $title
 * @property string|null $description
 * @property string|null $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $slug
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereSlug($value)
 * @property-read \App\Models\Product $product
 */
	class ProductTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductView
 *
 * @property int $id
 * @property int $product_id
 * @property string $ip
 * @property string $viewed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Database\Factories\ProductViewFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductView whereViewedAt($value)
 * @mixin \Eloquent
 */
	class ProductView extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SiteConfig
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $logo
 * @property string $phone
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SiteConfigTranslations[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereYoutube($value)
 * @property string $favicon
 * @property string $catalogue_link
 * @property-read mixed $favicon_url
 * @property-read string $logo_url
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereCatalogueLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereFavicon($value)
 * @property string $linkedin
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereLinkedin($value)
 * @property string $about_image
 * @property-read string $about_image_url
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereAboutImage($value)
 * @property-read string $catalogue_file_url
 * @property string $quota_background
 * @property-read string $quota_background_url
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereQuotaBackground($value)
 * @property string $fax
 * @property string $location
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereLocation($value)
 * @property string $tutorial_link
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfig whereTutorialLink($value)
 */
	class SiteConfig extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SiteConfigTranslations
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $site_config_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereSiteConfigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereUpdatedAt($value)
 * @property int $language_id
 * @property string $title
 * @property string $site_name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereTitle($value)
 * @property string $about_title
 * @property string $about_description
 * @property string $vision
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereAboutDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereAboutTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereVision($value)
 * @property string $quota_title
 * @property string $quota_description
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereQuotaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereQuotaTitle($value)
 * @property string $subscribe_title
 * @property string $subscribe_description
 * @property-read \App\Models\SiteConfig $site_config
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereSubscribeDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteConfigTranslations whereSubscribeTitle($value)
 */
	class SiteConfigTranslations extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SliderTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Query\Builder|Slider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Slider withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Slider withoutTrashed()
 * @mixin \Eloquent
 * @property-read string $image_url
 * @property int $order_no
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereVisible($value)
 * @property-read array $status
 * @method static \Illuminate\Database\Eloquent\Builder|Slider statusFilter($filter)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SliderTranslation
 *
 * @property int $id
 * @property int $slider_id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Slider $slider
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|SliderTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereSliderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SliderTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SliderTranslation withoutTrashed()
 * @mixin \Eloquent
 * @property int $language_id
 * @property string $btn_title
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereBtnTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereLanguageId($value)
 */
	class SliderTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subscriber
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Query\Builder|Subscriber onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Subscriber withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Subscriber withoutTrashed()
 * @mixin \Eloquent
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Visitor
 *
 * @property int $id
 * @property string $url
 * @property string $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\VisitorFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereUrl($value)
 * @mixin \Eloquent
 * @property string $visited_at
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereVisitedAt($value)
 */
	class Visitor extends \Eloquent {}
}

