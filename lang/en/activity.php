<?php

/**
 * 包含所有不同活動日誌事件的翻譯字串。
 * 這些應該按照事件名稱中冒號（:）前面的值來鍵入。
 * 如果沒有冒號，它們應該存在於頂層。
 */
return [
    'auth' => [
        'fail' => '登入失敗',
        'success' => '已登入',
        'password-reset' => '密碼已重設',
        'reset-password' => '已請求重設密碼',
        'checkpoint' => '已請求兩步驟驗證',
        'recovery-token' => '已使用兩步驟驗證恢復令牌',
        'token' => '已解決兩步驟驗證挑戰',
        'ip-blocked' => '已阻擋來自非白名單 IP 位址的請求，用於 <b>:identifier</b>',
        'sftp' => [
            'fail' => 'SFTP 登入失敗',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => '已將電子郵件從 <b>:old</b> 改為 <b>:new</b>',
            'password-changed' => '已更改密碼',
        ],
        'api-key' => [
            'create' => '已建立新的 API 金鑰 <b>:identifier</b>',
            'delete' => '已刪除 API 金鑰 <b>:identifier</b>',
        ],
        'ssh-key' => [
            'create' => '已將 SSH 金鑰 <b>:fingerprint</b> 添加到帳戶',
            'delete' => '已從帳戶移除 SSH 金鑰 <b>:fingerprint</b>',
        ],
        'two-factor' => [
            'create' => '已啟用兩步驟驗證',
            'delete' => '已停用兩步驟驗證',
        ],
    ],
    'server' => [
        'console' => [
            'command' => '在伺服器上執行了 "<b>:command</b>"',
        ],
        'power' => [
            'start' => '已啟動伺服器',
            'stop' => '已停止伺服器',
            'restart' => '已重新啟動伺服器',
            'kill' => '已強制終止伺服器程序',
        ],
        'backup' => [
            'download' => '已下載 <b>:name</b> 備份',
            'delete' => '已刪除 <b>:name</b> 備份',
            'restore' => '已恢復 <b>:name</b> 備份（已刪除檔案：<b>:truncate</b>）',
            'restore-complete' => '已完成 <b>:name</b> 備份的恢復',
            'restore-failed' => '未能完成 <b>:name</b> 備份的恢復',
            'start' => '已開始新的備份 <b>:name</b>',
            'complete' => '已將 <b>:name</b> 備份標記為完成',
            'fail' => '已將 <b>:name</b> 備份標記為失敗',
            'lock' => '已鎖定 <b>:name</b> 備份',
            'unlock' => '已解鎖 <b>:name</b> 備份',
        ],
        'database' => [
            'create' => '已建立新資料庫 <b>:name</b>',
            'rotate-password' => '已為資料庫 <b>:name</b> 輪換密碼',
            'delete' => '已刪除資料庫 <b>:name</b>',
        ],
        'file' => [
            'compress' => '已壓縮 <b>:directory:files</b>|已壓縮 <b>:directory</b> 中的 <b>:count</b> 個檔案',
            'read' => '已查看 <b>:file</b> 的內容',
            'copy' => '已建立 <b>:file</b> 的副本',
            'create-directory' => '已建立目錄 <b>:directory:name</b>',
            'decompress' => '已在 <b>:directory</b> 中解壓縮 <b>:file</b>',
            'delete' => '已刪除 <b>:directory:files</b>|已刪除 <b>:directory</b> 中的 <b>:count</b> 個檔案',
            'download' => '已下載 <b>:file</b>',
            'pull' => '已從 <b>:url</b> 下載遠端檔案到 <b>:directory</b>',
            'rename' => '已將 <b>:directory:from</b> 重命名為 <b>:directory:to</b>|已重命名 <b>:directory</b> 中的 <b>:count</b> 個檔案',
            'write' => '已寫入新內容到 <b>:file</b>',
            'upload' => '已開始檔案上傳',
            'uploaded' => '已上傳 <b>:directory:file</b>',
        ],
        'sftp' => [
            'denied' => '由於權限問題而阻止 SFTP 存取',
            'create' => '已建立 <b>:files</b>|已建立 <b>:count</b> 個新檔案',
            'write' => '已修改 <b>:files</b> 的內容|已修改 <b>:count</b> 個檔案的內容',
            'delete' => '已刪除 <b>:files</b>|已刪除 <b>:count</b> 個檔案',
            'create-directory' => '已建立 <b>:files</b> 目錄|已建立 <b>:count</b> 個目錄',
            'rename' => '已將 <b>:from</b> 重命名為 <b>:to</b>|已重命名或移動 <b>:count</b> 個檔案',
        ],
        'allocation' => [
            'create' => '已將 <b>:allocation</b> 添加到伺服器',
            'notes' => '已將 <b>:allocation</b> 的附註從 "<b>:old</b>" 更新為 "<b>:new</b>"',
            'primary' => '已將 <b>:allocation</b> 設為主要伺服器分配',
            'delete' => '已刪除 <b>:allocation</b> 分配',
        ],
        'schedule' => [
            'create' => '已建立 <b>:name</b> 排程',
            'update' => '已更新 <b>:name</b> 排程',
            'execute' => '已手動執行 <b>:name</b> 排程',
            'delete' => '已刪除 <b>:name</b> 排程',
        ],
        'task' => [
            'create' => '已為 <b>:name</b> 排程建立新的 "<b>:action</b>" 任務',
            'update' => '已更新 <b>:name</b> 排程的 "<b>:action</b>" 任務',
            'delete' => '已刪除 <b>:name</b> 排程的 "<b>:action</b>" 任務',
        ],
        'settings' => [
            'rename' => '已將伺服器從 "<b>:old</b>" 重命名為 "<b>:new</b>"',
            'description' => '已將伺服器描述從 "<b>:old</b>" 改為 "<b>:new</b>"',
            'reinstall' => '已重新安裝伺服器',
        ],
        'startup' => [
            'edit' => '已將 <b>:variable</b> 變數從 "<b>:old</b>" 改為 "<b>:new</b>"',
            'image' => '已將伺服器的 Docker 映像檔從 <b>:old</b> 更新為 <b>:new</b>',
        ],
        'subuser' => [
            'create' => '已將 <b>:email</b> 添加為子用戶',
            'update' => '已更新 <b>:email</b> 的子用戶權限',
            'delete' => '已移除 <b>:email</b> 的子用戶身份',
        ],
        'crashed' => '伺服器崩潰',
    ],
];
