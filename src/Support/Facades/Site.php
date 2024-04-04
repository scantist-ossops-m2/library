<?php namespace October\Rain\Support\Facades;

use October\Rain\Support\Facade;

/**
 * Site facade
 *
 * @method static bool hasFeature(string $name)
 * @method static mixed getSiteFromRequest(string $host, string $uri)
 * @method static mixed getSiteFromId($id)
 * @method static mixed getPrimarySite()
 * @method static mixed getAnySite()
 * @method static bool hasAnySite()
 * @method static bool hasMultiSite()
 * @method static bool hasSiteGroups()
 * @method static array listEnabled()
 * @method static array listSiteIds()
 * @method static iterable listSites()
 * @method static mixed getEditSite()
 * @method static string getEditSiteId()
 * @method static void setEditSiteId(string $siteId)
 * @method static void setEditSite(mixed $site)
 * @method static mixed getAnyEditSite()
 * @method static bool hasAnyEditSite()
 * @method static bool hasMultiEditSite()
 * @method static iterable listEditEnabled()
 * @method static iterable applyEditSite(mixed $site)
 * @method static mixed getActiveSite()
 * @method static string getActiveSiteId()
 * @method static void setActiveSiteId(string $siteId)
 * @method static void setActiveSite(mixed $site)
 * @method static iterable applyActiveSite(mixed $site)
 * @method static array listSiteIdsInGroup($siteId)
 * @method static array listSiteIdsInLocale($siteId)
 * @method static int|null getSiteIdFromContext()
 * @method static string|null getSiteCodeFromContext()
 * @method static mixed getSiteFromContext()
 * @method static bool hasGlobalContext()
 * @method static void withGlobalContext(callable $callback)
 * @method static void withContext($siteId, callable $callback)
 * @method static mixed getSiteFromBrowser(string $acceptLanguage)
 * @method static mixed getSiteForLocale(string $locale)
 * @method static void resetCache()
 *
 * @see \System\Classes\SiteManager
 */
class Site extends Facade
{
    /**
     * getFacadeAccessor gets the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'system.sites';
    }
}
