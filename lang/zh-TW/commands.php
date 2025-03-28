<?php

return [
    'appsettings' => [
        'comment' => [
            'author' => '提供此面板導出的 eggs 應使用的電子郵件地址。這應該是一個有效的電子郵件地址。',
            'url' => '應用程式 URL 必須以 https:// 或 http:// 開頭，這取決於您是否使用 SSL。如果您不包含協議部分，您的電子郵件和其他內容將連結到錯誤的位置。',
            'timezone' => "時區必須匹配 PHP 支持的時區之一。如果您不確定，請參考 https://php.net/manual/en/timezones.php。",
        ],
        'redis' => [
            'note' => '您已為一個或多個選項選擇了 Redis 驅動程式，請在下方提供有效的連接資訊。在大多數情況下，除非您修改了設置，否則可以使用提供的默認值。',
            'comment' => '默認情況下，Redis 伺服器實例的用戶名為 default 且沒有密碼，因為它運行在本地且外部無法訪問。如果是這種情況，只需不輸入任何值直接按 Enter 即可。',
            'confirm' => '看起來 Redis 已定義了 :field，您想更改嗎？',
        ],
    ],
    'database_settings' => [
        'DB_HOST_note' => '強烈建議不要使用 "localhost" 作為您的數據庫主機，因為我們經常遇到套接字連接問題。如果您想使用本地連接，應該使用 "127.0.0.1"。',
        'DB_USERNAME_note' => "使用 root 帳戶進行 MySQL 連接不僅受到強烈反對，而且本應用程式也不允許。您需要為此軟體創建一個 MySQL 用戶。",
        'DB_PASSWORD_note' => '您似乎已經定義了 MySQL 連接密碼，您想更改它嗎？',
        'DB_error_2' => '您的連接憑證尚未保存。您需要提供有效的連接信息才能繼續。',
        'go_back' => '返回並重試',
    ],
    'make_node' => [
        'name' => '輸入一個簡短的標識符，用於區分此節點與其他節點',
        'description' => '輸入描述以識別節點',
        'scheme' => '請輸入 https 用於 SSL 連接或 http 用於非 SSL 連接',
        'fqdn' => '輸入用於連接到守護程序的域名（例如 node.example.com）。如果您不為此節點使用 SSL，則只能使用 IP 地址',
        'public' => '此節點應該是公開的嗎？請注意，將節點設置為私有將阻止對此節點的自動部署能力。',
        'behind_proxy' => '您的 FQDN 是否在代理後面？',
        'maintenance_mode' => '是否應啟用維護模式？',
        'memory' => '輸入最大記憶體量',
        'memory_overallocate' => '輸入要超額分配的記憶體量，-1 將禁用檢查，0 將阻止創建新伺服器',
        'disk' => '輸入最大磁盤空間',
        'disk_overallocate' => '輸入要超額分配的磁盤量，-1 將禁用檢查，0 將阻止創建新伺服器',
        'cpu' => '輸入最大 CPU 數量',
        'cpu_overallocate' => '輸入要超額分配的 CPU 數量，-1 將禁用檢查，0 將阻止創建新伺服器',
        'upload_size' => '輸入最大文件上傳大小',
        'daemonListen' => '輸入守護程序監聽端口',
        'daemonSFTP' => '輸入守護程序 SFTP 監聽端口',
        'daemonSFTPAlias' => '輸入守護程序 SFTP 別名（可以為空）',
        'daemonBase' => '輸入基礎資料夾',
        'success' => '成功創建了名為 :name 且 ID 為 :id 的新節點',
    ],
    'node_config' => [
        'error_not_exist' => '所選節點不存在。',
        'error_invalid_format' => '指定的格式無效。有效選項為 yaml 和 json。',
    ],
    'key_generate' => [
        'error_already_exist' => '您似乎已經配置了應用程式加密金鑰。繼續執行此過程將覆蓋該金鑰並導致任何現有加密數據損壞。除非您知道自己在做什麼，否則請勿繼續。',
        'understand' => '我理解執行此命令的後果，並接受對加密數據丟失的所有責任。',
        'continue' => '您確定要繼續嗎？更改應用程式加密金鑰將導致數據丟失。',
    ],
    'schedule' => [
        'process' => [
            'no_tasks' => '沒有需要執行的伺服器排程任務。',
            'error_message' => '處理排程時遇到錯誤：',
        ],
    ],
    'upgrade' => [
        'integrity' => '此命令不驗證下載資產的完整性。在繼續之前，請確保您信任下載源。如果您不希望下載存檔，請使用 --skip-download 標誌表示，或在下面的問題中回答"否"。',
        'source_url' => '下載來源（使用 --url= 設置）：',
        'php_version' => '無法執行自升級過程。最低要求的 PHP 版本是 7.4.0，您的版本是',
        'skipDownload' => '您想下載並解壓最新版本的存檔文件嗎？',
        'webserver_user' => '您的網頁伺服器用戶被檢測為 <fg=blue>[{:user}]</>：這是否正確？',
        'name_webserver' => '請輸入運行您的網頁伺服器進程的用戶名。這因系統而異，但通常是 "www-data"、"nginx" 或 "apache"。',
        'group_webserver' => '您的網頁伺服器組被檢測為 <fg=blue>[{:group}]</>：這是否正確？',
        'group_webserver_question' => '請輸入運行您的網頁伺服器進程的組名。通常這與您的用戶名相同。',
        'are_your_sure' => '您確定要為您的面板運行升級過程嗎？',
        'terminated' => '升級過程被用戶終止。',
        'success' => '面板已成功升級。請確保您也更新任何守護程序實例',
    ],
];
