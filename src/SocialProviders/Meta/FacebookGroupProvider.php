<?php

namespace Inovector\Mixpost\SocialProviders\Meta;

use Inovector\Mixpost\Http\Resources\AccountResource;
use Inovector\Mixpost\SocialProviders\Meta\Concerns\ManagesFacebookGroupResources;
use Inovector\Mixpost\SocialProviders\Meta\Concerns\ManagesFacebookOAuth;

// @deprecated
// We will remove this feature soon
class FacebookGroupProvider extends MetaProvider
{
    use ManagesFacebookOAuth;
    use ManagesFacebookGroupResources;

    public bool $onlyUserAccount = false;

    public static function externalPostUrl(AccountResource $accountResource): string
    {
        return "https://www.facebook.com/{$accountResource->pivot->provider_post_id}";
    }
}
