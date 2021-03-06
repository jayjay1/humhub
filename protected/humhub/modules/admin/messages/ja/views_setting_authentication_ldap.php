<?php
/**
 * Message translations.
 *
 * This file is automatically generated by 'yii message/extract' command.
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * Message string can be used with plural forms format. Check i18n section
 * of the guide for details.
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
return [
    'LDAP Attribute for E-Mail Address. Default: &quotmail&quot;' => '',
    'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => 'パスワードは平文で送信されることから情報漏洩を防止するために、運用環境ではTLS / SSL化する事が強く推奨されます。',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'ログインした時に適用するフィルタを定義します。 %s はログインアクションにユーザ名を置き換えます。例：&quot;(sAMAccountName=%s)&quot; または &quot;(uid=%s)&quot;',
    'LDAP Attribute for Username. Example: &quotuid&quot; or &quot;sAMAccountName&quot;' => 'ユーザー名のLDAP属性。例：&quotuid&quot; または &quot;sAMAccountName&quot;',
    'Limit access to users meeting this criteria. Example: &quot(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'この基準を満たすユーザーへのアクセスを制限します。例：&quot(objectClass=posixAccount)&quot; または &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;',
    'Save' => '保存',
    'Status: Error! (Message: {message})' => 'ステータス：エラー！（メッセージ：{message}）',
    'Status: OK! ({userCount} Users)' => 'ステータス：OK！（{userCount} ユーザー）',
    'The default base DN used for searching for accounts.' => 'デフォルトのベース識別名（DN）を、アカウントの検索に使用。',
    'The default credentials password (used only with username above).' => 'デフォルトの資格のパスワード（上のユーザ名でのみ使用されます）。',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'デフォルトの認証情報はユーザー名。サーバによってはこれがDN形式であることを必要とする。 LDAPサーバがバインドする結合は、単純なユーザ名で可能であるべきで、DNを必要とする場合にはDN形式で指定する必要があります。',
];
