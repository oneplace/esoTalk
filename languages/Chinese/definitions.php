<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["Chinese"] = array(
	"locale" => "zh-CN",
	"name" => "Chinese",
	"description" => "A useful Chinese language pack.",
	"version" => ESOTALK_VERSION,
	"author" => "ToNear",
	"authorEmail" => "shidianxia@gmail.com",
	"authorURL" => "http://tonear.com",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "昨天";
$definitions["%d days ago"] = "%d 天前";
$definitions["%d hour ago"] = "1 小时前";
$definitions["%d hours ago"] = "%d 小时前";
$definitions["%d minute ago"] = "1 分钟前";
$definitions["%d minutes ago"] = "%d 分钟前";
$definitions["%d month ago"] = "1 月前";
$definitions["%d months ago"] = "%d 月前";
$definitions["%d second ago"] = "1 秒前";
$definitions["%d seconds ago"] = "%d 秒前";
$definitions["%d week ago"] = "上周";
$definitions["%d weeks ago"] = "%d 周前";
$definitions["%d year ago"] = "去年";
$definitions["%d years ago"] = "%d 年前";

$definitions["%s and %s"] = "%s 和 %s";
$definitions["%s can view this conversation."] = "%s 可以查看这则讨论";
$definitions["%s changed %s's group to %s."] = "%s 将 %s 的小组改为 %s.";
$definitions["%s changed your group to %s."] = "%s 将您的小组改为 %s.";
$definitions["%s conversation"] = "%s 讨论";
$definitions["%s conversations"] = "%s 讨论";
$definitions["%s invited you to %s."] = "%s 邀请你参与 %s.";
$definitions["%s joined the forum."] = "%s 加入讨论";
$definitions["%s post"] = "%s 发表";
$definitions["%s posted %s"] = "%s 发表 %s";
$definitions["%s posted in %s."] = "%s 发表于 %s.";
$definitions["%s posts"] = "%s 帖子";
$definitions["%s reply"] = "%s 回复";
$definitions["%s replies"] = "%s 回复";
$definitions["%s Settings"] = "%s 设置";
$definitions["%s started the conversation %s."] = "%s 发起了讨论 %s.";
$definitions["%s tagged you in a post."] = "%s 在一则讨论中提到了您";
$definitions["%s will be able to view this conversation."] = "%s 将可以查看这则讨论";
$definitions["%s will be able to:"] = "%s 将可以:";

$definitions["A new version of esoTalk (%s) is available."] = "新版本的 esoTalk (%s) 已经发布";
$definitions["a private conversation"] = "一则非公开讨论";
$definitions["Access the administrator control panel."] = "进入管理控制面板";
$definitions["Account type"] = "帐号类型";
$definitions["Activate"] = "活动的";
$definitions["Activity"] = "活动";
$definitions["Add"] = "增加";
$definitions["Administration"] = "管理";
$definitions["Administrator email"] = "管理员邮件";
$definitions["Administrator password"] = "管理员密码";
$definitions["Administrator username"] = "管理员用户名";
$definitions["Advanced options"] = "更多设置";
$definitions["All Channels"] = "所有节点";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "已有帐号？ <a href='%s' class='link-login'>登录吧！</a>";
$definitions["Appearance"] = "外观";
$definitions["Automatically star conversations that I reply to"] = "自动给我回复的讨论加星标";
$definitions["Avatar"] = "头像";

$definitions["Back to channels"] = "回到节点";
$definitions["Back to conversation"] = "回到讨论";
$definitions["Back to member"] = "回到用户";
$definitions["Back to members"] = "回到用户";
$definitions["Back to search"] = "回到首页";
$definitions["Base URL"] = "Base URL";
$definitions["Bold"] = "粗体";
$definitions["By %s"] = "By %s";

$definitions["Can suspend/unsuspend members"] = "可以屏蔽或恢复用户";
$definitions["Cancel"] = "取消";
$definitions["Change %s's Permissions"] = "更改 %s 的权限";
$definitions["Change avatar"] = "更换头像";
$definitions["Change channel"] = "更改节点";
$definitions["Change name"] = "更改名字";
$definitions["Change Password or Email"] = "更改密码或邮箱";
$definitions["Change password"] = "更改密码";
$definitions["Change permissions"] = "更改权限";
$definitions["Change"] = "更改";
$definitions["Channel description"] = "节点描述";
$definitions["Channel List"] = "节点列表";
$definitions["Channel title"] = "节点标题";
$definitions["Channels"] = "节点";
$definitions["Choose a secure password of at least %s characters"] = "请使用一个更加安全的密码，不少于 %s 个字符";
$definitions["Choose what people will see when they first visit your forum."] = "设定来访者看到的首页内容";
$definitions["Click on a member's name to remove them."] = "点击用户名以删除";
$definitions["Close registration"] = "关闭注册";
$definitions["Confirm password"] = "重复密码";
$definitions["Controls"] = "控制";
$definitions["Conversation"] = "讨论";
$definitions["Conversations participated in"] = "参与过的讨论";
$definitions["Conversations started"] = "发起的讨论";
$definitions["Conversations"] = "讨论";
$definitions["Copy permissions from"] = "复制权限";
$definitions["Create Channel"] = "创建节点";
$definitions["Create Group"] = "创建小组";
$definitions["Create Member"] = "创建用户";
$definitions["Customize how users can become members of your forum."] = "设定用户注册的方式";

$definitions["Dashboard"] = "控制面板";
$definitions["Default forum language"] = "默认语言";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>永久删除</strong> 所有讨论";
$definitions["Delete Channel"] = "删除节点";
$definitions["Delete conversation"] = "删除讨论";
$definitions["Delete member"] = "删除用户";
$definitions["Delete Member"] = "删除用户";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>删除该用户的帖子</strong> 仅仅是标记为删除，可以恢复";
$definitions["Delete"] = "删除";
$definitions["Deleted %s by %s"] = "删除 %s by %s";
$definitions["Disable"] = "禁用";
$definitions["Discard Draft"] = "丢掉草稿";

$definitions["Edit Channel"] = "编辑节点";
$definitions["Edit Group"] = "编辑小组";
$definitions["Edit member groups"] = "编辑用户组";
$definitions["Edit your profile"] = "编辑个人资料";
$definitions["Edit"] = "编辑";
$definitions["Edited %s by %s"] = "编辑 %s by %s";
$definitions["Email me when I'm added to a private conversation"] = "当我被加入非公开讨论时发邮件通知我";
$definitions["Email me when someone posts in a conversation I have starred"] = "当有人回复我发表的讨论时发邮件通知我";
$definitions["Email"] = "邮件";
$definitions["Enable"] = "启用";
$definitions["Enter a conversation title"] = "给讨论设定一个标题";
$definitions["Error"] = "出错了";
$definitions["esoTalk version"] = "esoTalk 版本";
$definitions["Everyone"] = "所有人";

$definitions["Fatal Error"] = "额额额，出现了严重错误...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "按用户名或小组搜索...";
$definitions["Filter conversations..."] = "搜索讨论...";
$definitions["Find this post"] = "搜索这个帖子";
$definitions["First posted"] = "首次发表";
$definitions["Forgot Password"] = "忘记密码";
$definitions["Forum header"] = "论坛头部";
$definitions["Forum language"] = "论坛语言";
$definitions["Forum Settings"] = "论坛设置";
$definitions["Forum Statistics"] = "论坛数据";
$definitions["Forum title"] = "论坛标题";
$definitions["forumDescription"] = "%s 是专门讨论 %s 和 %s 的论坛";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "在所有节点给这个小组默认权限";
$definitions["Global permissions"] = "全局权限";
$definitions["Go to top"] = "回到顶部";
$definitions["Group name"] = "小组名称";
$definitions["group.administrator"] = "管理员";
$definitions["group.administrator.plural"] = "管理员";
$definitions["group.guest"] = "访客";
$definitions["group.guest.plural"] = "访客";
$definitions["group.member"] = "成员";
$definitions["group.member.plural"] = "成员";
$definitions["group.Moderator"] = "主持者";
$definitions["group.Moderator.plural"] = "主持者";
$definitions["group.suspended"] = "禁用的";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "小组可以将用户分门别类";
$definitions["Groups"] = "小组";

$definitions["Header"] = "头部";
$definitions["Home page"] = "首页";
$definitions["HTML is allowed."] = "可以使用HTML代码";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "如果你在安装时遇到任何问题，请前往 <a href='%s'>esoTalk 支持社区</a> 获取帮助";
$definitions["Install esoTalk"] = "安装 esoTalk";
$definitions["Install My Forum"] = "安装我的论坛";
$definitions["Installed Languages"] = "安装的语言包";
$definitions["Installed Plugins"] = "安装的插件";
$definitions["Installed plugins"] = "安装的插件";
$definitions["Installed Skins"] = "安装的皮肤";
$definitions["Installed skins"] = "安装的皮肤";
$definitions["is %s"] = "是 %s";

$definitions["Jump to last"] = "查看最新";
$definitions["Jump to unread"] = "查看未读";
$definitions["just now"] = "刚刚";

$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>保留该用户的帖子</strong> 该用户的所有帖子将被保留，但会显示为删除";

$definitions["label.draft"] = "草稿";
$definitions["label.locked"] = "锁定";
$definitions["label.muted"] = "禁言";
$definitions["label.private"] = "非公开";
$definitions["label.sticky"] = "置顶";
$definitions["Labels"] = "标签";
$definitions["Last active %s"] = "最后活动于 %s";
$definitions["Latest News"] = "最新消息";
$definitions["Loading..."] = "载入中...";
$definitions["Lock"] = "锁定";
$definitions["Log In"] = "登录";
$definitions["Log Out"] = "登出";

$definitions["Manage Groups"] = "管理小组";
$definitions["Manage Languages"] = "管理语言";
$definitions["Mark as read"] = "标记为已读";
$definitions["Mark all as read"] = "全部标记为已读";
$definitions["Maximum size of %s. %s."] = "最大尺寸 %s. %s.";
$definitions["Member groups"] = "用户组";
$definitions["Member List"] = "成员列表";
$definitions["Members Allowed to View this Conversation"] = "可以查看这则讨论的用户";
$definitions["Members Online"] = "在线用户";
$definitions["Members"] = "用户";
$definitions["Mobile skin"] = "移动界面";
$definitions["Moderate"] = "默认";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>移动</strong> 讨论到以下节点:";
$definitions["Mute conversation"] = "禁言讨论";
$definitions["MySQL database"] = "MySQL 数据库";
$definitions["MySQL host address"] = "MySQL 数据库地址";
$definitions["MySQL password"] = "MySQL 密码";
$definitions["MySQL queries"] = "MySQL 查询";
$definitions["MySQL table prefix"] = "MySQL 表前缀";
$definitions["MySQL username"] = "MySQL 用户名";
$definitions["MySQL version"] = "MySQL 版本";

$definitions["Name"] = "名字";
$definitions["never"] = "从不";
$definitions["New Conversation"] = "发起讨论";
$definitions["New conversations in the past week"] = "过去一周的新讨论";
$definitions["New email"] = "新邮件地址";
$definitions["New members in the past week"] = "过去一周的新成员";
$definitions["New password"] = "新密码";
$definitions["New posts in the past week"] = "过去一周的新帖子";
$definitions["New username"] = "新用户名";
$definitions["Next Step"] = "下一步";
$definitions["Next"] = "下一步";
$definitions["No preview"] = "不用预览";
$definitions["No"] = "否";
$definitions["Notifications"] = "提醒";
$definitions["Now"] = "现在";

$definitions["OK"] = "好";
$definitions["Online"] = "在线";
$definitions["online"] = "在线";
$definitions["Open registration"] = "开放注册";
$definitions["optional"] = "可选";
$definitions["Order By:"] = "查询方式:";
$definitions["Original Post"] = "原帖";

$definitions["Page Not Found"] = "额，找不到页面了...";
$definitions["Password"] = "密码";
$definitions["PHP version"] = "PHP 版本";
$definitions["Plugins"] = "插件";
$definitions["Post a Reply"] = "发表回复";
$definitions["Post count"] = "贴子数";
$definitions["Posts"] = "帖子";
$definitions["Preview"] = "预览";
$definitions["Previous"] = "返回";

$definitions["quote"] = "引用";

$definitions["Read more"] = "查看更多";
$definitions["Recent posts"] = "最近的帖子";
$definitions["Recover Password"] = "恢复密码";
$definitions["Registration"] = "注册";
$definitions["Remove avatar"] = "去掉头像";
$definitions["Rename Member"] = "重命名";
$definitions["Reply"] = "回复";
$definitions["Require users to confirm their email address"] = "需要用户确认邮件地址";
$definitions["restore"] = "恢复";

$definitions["Save Changes"] = "保存更改";
$definitions["Save Draft"] = "保存草稿";
$definitions["Search conversations..."] = "搜索讨论...";
$definitions["Search within this conversation..."] = "在此讨论中搜寻...";
$definitions["Search"] = "搜索";
$definitions["See the private conversations I've had with %s"] = "查看我所参与的非公开讨论 %s";
$definitions["Settings"] = "设置";
$definitions["Show an image in the header"] = "在头部显示图片LOGO";
$definitions["Show matching posts"] = "显示符合的帖子";
$definitions["Show the channel list by default"] = "默认方式显示节点列表";
$definitions["Show the conversation list by default"] = "默认方式显示讨论列表";
$definitions["Show the forum title in the header"] = "在头部显示论坛标题";
$definitions["Sign Up"] = "注册";
$definitions["Skins"] = "皮肤";
$definitions["Specify Setup Information"] = "安装信息";
$definitions["Star to receive notifications"] = "加星标并接收提醒";
$definitions["Starred"] = "已加星标";
$definitions["Start a conversation"] = "发起讨论";
$definitions["Start a private conversation with %s"] = "与 %s 发起非公开讨论";
$definitions["Start Conversation"] = "发起讨论";
$definitions["Starting a conversation"] = "发起讨论";
$definitions["Statistics"] = "数据";
$definitions["statistic.conversation.plural"] = "%s 讨论";
$definitions["statistic.conversation"] = "%s 讨论";
$definitions["statistic.member.plural"] = "%s 用户";
$definitions["statistic.member"] = "%s 用户";
$definitions["statistic.online.plural"] = "%s 在线";
$definitions["statistic.online"] = "%s 在线";
$definitions["statistic.post.plural"] = "%s 帖子";
$definitions["statistic.post"] = "%s 帖子";
$definitions["Sticky"] = "置顶";
$definitions["Subscribed"] = "订阅";
$definitions["Subscription"] = "Subscription";
$definitions["Suspend member"] = "禁止的用户";
$definitions["Suspend members."] = "禁止的用户.";
$definitions["Suspend"] = "禁止";

$definitions["Uninstall"] = "卸载";
$definitions["Unlock"] = "解锁";
$definitions["Unmute conversation"] = "解禁讨论";
$definitions["Unstarred"] = "不加星标";
$definitions["Unsticky"] = "不置顶";
$definitions["Unsubscribe new users by default"] = "默认退订新用户";
$definitions["Unsubscribed"] = "退订";
$definitions["Unsuspend member"] = "解禁用户";
$definitions["Unsuspend"] = "解禁";
$definitions["Untitled conversation"] = "未加标题的讨论";
$definitions["Upgrade esoTalk"] = "更新 esoTalk";
$definitions["Use for mobile"] = "移动版本";
$definitions["Use friendly URLs"] = "使用简洁链接";
$definitions["Used to verify your account and subscribe to conversations"] = "这是用来验证您的帐户和使用邮件订阅的";
$definitions["Username"] = "用户名";

$definitions["View %s's profile"] = "查看 %s 的个人资料";
$definitions["View all notifications"] = "查看所有提醒";
$definitions["View more"] = "查看更多";
$definitions["View your profile"] = "查看个人资料";
$definitions["View"] = "查看";
$definitions["Viewing: %s"] = "查看: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s 帖子";

$definitions["Warning"] = "唔，程序员开小差了";
$definitions["Write a reply..."] = "发表回复...";

$definitions["Yes"] = "是";
$definitions["You can manage channel-specific permissions on the channels page."] = "你可以在节点页面管理节点下的用户权限";
$definitions["Your current password"] = "您目前的密码";


// Messages.
$definitions["message.404"] = "唔，页面找不到了，可能是管理员太粗心了，点击刷新试试？ 如果你再次看到这个页面，那就别试了，看看别的内容～";
$definitions["message.ajaxDisconnected"] = "未能连接服务器，请稍等 <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>重试</a>，或者<a href='' onclick='window.location.reload();return false'>刷新</a>.";
$definitions["message.ajaxRequestPending"] = "稍等一下，我们正在为您处理页面";
$definitions["message.avatarError"] = "上传头像出错，可能是你的格式不对或者图片太大了，换一张试试？";
$definitions["message.cannotDeleteLastChannel"] = "不要删除仅剩的节点！";
$definitions["message.changesSaved"] = "您的更改已经保存";
$definitions["message.channelsHelp"] = "节点是用来给讨论分类的，你可以创建任何你想要的节点，并且在这里使用拖放操作管理";
$definitions["message.confirmDelete"] = "你确定要删除吗？不能反悔哦！";
$definitions["message.confirmDiscardReply"] = "你没有将你的回复保存为草稿，需要丢掉草稿吗？";
$definitions["message.confirmEmail"] = "在您使用您的新帐号之前，需要确认邮件地址，请到邮箱中收取确认邮件并点击其中的链接完成确认。";
$definitions["message.confirmLeave"] = "您还未保存内容，真的要离开吗？";
$definitions["message.connectionError"] = "esoTalk 不能连接到 MySQL 服务器. 错误信息:<br/>%s";
$definitions["message.conversationDeleted"] = "讨论删除了，爽吧？";
$definitions["message.conversationNotFound"] = "因为某种原因您不能查看该讨论，可能它已经被删除或者未公开，您可以尝试登录后查看，如果不能，那就是真不能...";
$definitions["message.deleteChannelHelp"] = "等等，请您考虑一下，节点一旦删除，就不容易恢复了。";
$definitions["message.emailConfirmed"] = "太棒了，您已经验证了邮件地址，开始 <a href='".URL("conversation/start")."'>发起讨论</a>吧？";
$definitions["message.emailDoesntExist"] = "您是不是输错了邮件地址？系统找不到任何记录。";
$definitions["message.emailNotYetConfirmed"] = "在登录前您必须确认邮件地址，如果您没有收到确认邮件，<a href='%s'>点这里</a>让我们为您在发送一次";
$definitions["message.emailTaken"] = "这个邮件地址已经被使用了";
$definitions["message.empty"] = "您必须填写内容";
$definitions["message.emptyPost"] = "帖子不能为空哦，试着写一些内容吧";
$definitions["message.emptyTitle"] = "帖子标题不能为空哦";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk 已经安装完成</strong><br/><small>如果您要重新安装 esoTalk，必须删除<strong>config/config.php</strong>。</small>";
$definitions["message.esoTalkUpdateAvailable"] = "新版本的 esoTalk, %s, 已经发布";
$definitions["message.esoTalkUpdateAvailableHelp"] = "建议您更新到最新版本以实现更酷的功能和更安全的机制";
$definitions["message.esoTalkUpToDate"] = "您的版本已经是最新的";
$definitions["message.esoTalkUpToDateHelp"] = "esoTalk 软件的开发者需要您的支持，如果您喜欢这款软件，请不吝<a href='%s' target='_blank'>捐助</a>";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "不用担心，填写以下信心您就可以重新设定密码了：";
$definitions["message.fulltextKeywordWarning"] = "我们暂时还不支持搜索中文，请等待新版本";
$definitions["message.gambitsHelp"] = "想分门别类地搜索内容？点击以下按钮：";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "您的登录信息有误";
$definitions["message.incorrectPassword"] = "您目前的密码错误";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "您输入了不合法的邮件地址";
$definitions["message.invalidUsername"] = "用户名太复杂啦";
$definitions["message.javascriptRequired"] = "网站需要启用 JavaScript 特性，请在浏览器设置中开启。";
$definitions["message.languageUninstalled"] = "该语言包已经卸载";
$definitions["message.locked"] = "这个讨论已经被<strong>锁定</strong>，所以不能再回复了";
$definitions["message.loginToParticipate"] = "发起新讨论或回复讨论，都需要先登录";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>登录</a> 或 <a href='%2\$s' class='link-join'>注册</a> 来参与讨论吧！";
$definitions["message.logInToSeeAllConversations"] = "请<a href='".URL("user/login")."' class='link-login'>登录</a> 以便查看访客看不到的内容";
$definitions["message.memberNotFound"] = "没有找到该用户";
$definitions["message.memberNoPermissionView"] = "该用户不能加入讨论，因为他/她没有权限查看这个节点下的内容";
$definitions["message.nameTaken"] = "这个名字已经被占用了";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results.";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "没有用户在线";
$definitions["message.noNotifications"] = "您暂时没有提醒";
$definitions["message.noPermission"] = "额，你没有权限查看这些内容";
$definitions["message.noPermissionToReplyInChannel"] = "您没有权限在这个节点下的讨论中发表回复";
$definitions["message.noPluginsInstalled"] = "没有安装任何插件";
$definitions["message.noSearchResults"] = "没有搜索到匹配的讨论";
$definitions["message.noSearchResultsMembers"] = "没有搜索到匹配的用户";
$definitions["message.noSearchResultsPosts"] = "没有搜索到匹配的帖子";
$definitions["message.noSkinsInstalled"] = "没有安装任何皮肤";
$definitions["message.notWritable"] = "<code>%s</code> 不可写，请使用<code>chmod</code>命令更改为 <code>777</code> 权限";
$definitions["message.pageNotFound"] = "唔，页面没有找到";
$definitions["message.passwordChanged"] = "好了，您的密码已经更改，别再忘记了哦";
$definitions["message.passwordEmailSent"] = "我们已经为您发送了密码重置邮件，请前往查收";
$definitions["message.passwordsDontMatch"] = "密码不匹配";
$definitions["message.passwordTooShort"] = "密码太短啦";
$definitions["message.pluginCannotBeEnabled"] = "该插件 <em>%s</em> 不能启用: %s";
$definitions["message.pluginDependencyNotMet"] = "为了启用该插件，您必须安装并启用 %s 版本 %s ";
$definitions["message.pluginUninstalled"] = "插件卸载完成";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "减少搜索所用关键词";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.\n\nIf this was you, simply visit the following link and your account will be activated:\n%2\$s";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "\n\n(If you don't want to receive any emails of this kind again, <a href='%s'>click here</a>.)";
$definitions["email.forgotPassword.body"] = "Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.\n\nHowever, if you did forget your password and wish to set a new one, visit the following link:\n%2\$s";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "Hey %s!\n\n";
$definitions["email.mention.body"] = "%1\$s tagged you in a post in the conversation '%2\$s'.\n\nTo view the post, check out the following link:\n%3\$s";
$definitions["email.mention.subject"] = "%1\$s tagged you in a post";
$definitions["email.privateAdd.body"] = "You have been added to a private conversation titled '%1\$s'.\n\nTo view this conversation, check out the following link:\n%2\$s";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.replyToStarred.body"] = "%1\$s has replied to a conversation which you starred: '%2\$s'.\n\nTo view the new activity, check out the following link:\n%3\$s";
$definitions["email.replyToStarred.subject"] = "There is a new reply to '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "作者:";
$definitions["gambit.contributor:"] = "贡献者:";
$definitions["gambit.member"] = "用户";
$definitions["gambit.myself"] = "我";
$definitions["gambit.draft"] = "草稿";
$definitions["gambit.has attachments"] = "有附件";
$definitions["gambit.locked"] = "锁定";
$definitions["gambit.order by newest"] = "查看最新";
$definitions["gambit.order by replies"] = "查看回复";
$definitions["gambit.private"] = "非公开";
$definitions["gambit.random"] = "随机";
$definitions["gambit.reverse"] = "保留";
$definitions["gambit.starred"] = "已加星标";
$definitions["gambit.muted"] = "禁言";
$definitions["gambit.sticky"] = "置顶";
$definitions["gambit.unread"] = "未读";
$definitions["gambit.more results"] = "更多结果";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "今天热门的"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "24小时内热门的"; // what it actually evaluates to

$definitions["gambit.has replies"] = "有回复的";
$definitions["gambit.has >0 replies"] = "有一条以上回复的";
$definitions["gambit.has >10 replies"] = "有10条以上回复的";

$definitions["gambit.has no replies"] = "没有回复";
$definitions["gambit.has 0 replies"] = "没有回复";

$definitions["gambit.dead"] = "dead";
$definitions["gambit.active >30 day"] = "三十天以前活动的";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "秒";
$definitions["gambit.minute"] = "分";
$definitions["gambit.hour"] = "小时";
$definitions["gambit.day"] = "天";
$definitions["gambit.week"] = "周";
$definitions["gambit.month"] = "月";
$definitions["gambit.year"] = "年";
$definitions["gambit.last"] = "最近"; // as in "active last 180 days"
$definitions["gambit.active"] = "回复"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";

//plus
$definitions["Username or Email"] = "用户名或邮件地址";
$definitions["Keep me logged in"] = "自动登录";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "还没有帐号？ <a href='%s' class='link-join'>点击注册</a>";