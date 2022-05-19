#!/usr/bin/env bash

cp ./.postgresql/patches/m131023_165755_initial.php ./protected/humhub/migrations/m131023_165755_initial.php
cp ./.postgresql/patches/m131213_165552_user_optimize.php ./protected/humhub/modules/user/migrations/m131213_165552_user_optimize.php
cp ./.postgresql/patches/m140512_141414_i18n_profilefields.php ./protected/humhub/modules/user/migrations/m140512_141414_i18n_profilefields.php
cp ./.postgresql/patches/m140701_074404_protect_default_profilefields.php ./protected/humhub/modules/user/migrations/m140701_074404_protect_default_profilefields.php
cp ./.postgresql/patches/m140901_080147_indizies.php ./protected/humhub/modules/like/migrations/m140901_080147_indizies.php
cp ./.postgresql/patches/m140901_080432_indices.php ./protected/humhub/modules/file/migrations/m140901_080432_indices.php
cp ./.postgresql/patches/m171025_200312_utf8mb4_fixes.php ./protected/humhub/modules/user/migrations/m171025_200312_utf8mb4_fixes.php
cp ./.postgresql/patches/m131023_164513_initial.php ./protected/humhub/modules/user/migrations/m131023_164513_initial.php
cp ./.postgresql/patches/m141015_173305_follow_notifications.php ./protected/humhub/migrations/m141015_173305_follow_notifications.php
cp ./.postgresql/patches/m150429_223856_optimize.php ./protected/humhub/modules/notification/migrations/m150429_223856_optimize.php
cp ./.postgresql/patches/m150910_223305_fix_user_follow.php ./protected/humhub/modules/user/migrations/m150910_223305_fix_user_follow.php
cp ./.postgresql/patches/m151013_223814_include_dashboard.php ./protected/humhub/modules/space/migrations/m151013_223814_include_dashboard.php
cp ./.postgresql/patches/m151223_171310_fix_notifications.php ./protected/humhub/modules/space/migrations/m151223_171310_fix_notifications.php
cp ./.postgresql/patches/m160205_203840_foreign_keys.php ./protected/humhub/modules/user/migrations/m160205_203840_foreign_keys.php
cp ./.postgresql/patches/m160205_203913_foreign_keys.php ./protected/humhub/modules/space/migrations/m160205_203913_foreign_keys.php
#cp ./.postgresql/patches/m160220_013525_contentcontainer_id.php ./protected/humhub/modules/content/migrations/m160220_013525_contentcontainer_id.php
#cp ./.postgresql/patches/m160229_162959_multiusergroups.php ./protected/humhub/modules/user/migrations/m160229_162959_multiusergroups.php
#cp ./.postgresql/patches/m160501_220850_activity_pk_int.php ./protected/humhub/modules/activity/migrations/m160501_220850_activity_pk_int.php
#cp ./.postgresql/patches/m170110_151419_membership_notifications.php ./protected/humhub/modules/space/migrations/m170110_151419_membership_notifications.php
#cp ./.postgresql/patches/m170111_190400_disable_web_notifications.php ./protected/humhub/modules/notification/migrations/m170111_190400_disable_web_notifications.php

git add .
git commit -am "migration hotfix"
git push
