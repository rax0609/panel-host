<?php

return [
    'permissions' => [
        'activity_desc' => '控制用戶對服務器活動日誌訪問的權限。',
        'startup_desc' => '控制用戶可以查看此服務器的啟動參數能力的權限。',
        'settings_desc' => '控制用戶修改此服務器設置能力的權限。',
        'control_desc' => '控制用戶管理服務器電源狀態或發送命令能力的權限。',
        'user_desc' => '允許用戶管理服務器上其他子用戶的權限。他們永遠不能編輯自己的帳戶，或分配自己沒有的權限。',
        'file_desc' => '控制用戶修改此服務器檔案系統能力的權限。',
        'allocation_desc' => '控制用戶修改此服務器端口分配能力的權限。',
        'database_desc' => '控制用戶訪問此服務器數據庫管理的權限。',
        'backup_desc' => '控制用戶生成和管理服務器備份能力的權限。',
        'schedule_desc' => '控制用戶訪問此服務器排程管理的權限。',
        'startup_read' => '允許用戶查看服務器的啟動變數。',
        'startup_update' => '允許用戶修改服務器的啟動變數。',
        'startup_docker_image' => '允許用戶修改運行服務器時使用的Docker映像。',
        'setting_reinstall' => '允許用戶觸發此服務器的重新安裝。',
        'setting_rename' => '允許用戶重命名此服務器並更改其描述。',
        'activity_read' => '允許用戶查看服務器的活動日誌。',
        'websocket_*' => '允許用戶訪問此服務器的websocket。',
        'control_console' => '允許用戶向服務器控制台發送數據。',
        'control_start' => '允許用戶啟動服務器實例。',
        'control_stop' => '允許用戶停止服務器實例。',
        'control_restart' => '允許用戶重啟服務器實例。',
        'control_kill' => '允許用戶強制終止服務器實例。',
        'user_create' => '允許用戶為服務器創建新的用戶帳戶。',
        'user_read' => '允許用戶查看與此服務器關聯的用戶。',
        'user_update' => '允許用戶修改與此服務器關聯的其他用戶。',
        'user_delete' => '允許用戶刪除與此服務器關聯的其他用戶。',
        'file_create' => '允許用戶創建新的文件和目錄。',
        'file_read' => '允許用戶查看目錄的內容，但不能查看或下載文件內容。',
        'file_read_content' => '允許用戶查看指定文件的內容。這也將允許用戶下載文件。',
        'file_update' => '允許用戶更新與服務器關聯的文件和文件夾。',
        'file_delete' => '允許用戶刪除文件和目錄。',
        'file_archive' => '允許用戶創建文件存檔和解壓現有存檔。',
        'file_sftp' => '允許用戶使用SFTP客戶端執行上述文件操作。',
        'allocation_read' => '允許用戶查看目前分配給此服務器的所有端口。擁有此服務器任何訪問級別的用戶始終可以查看主要分配。',
        'allocation_update' => '允許用戶更改主服務器分配並為每個分配附加備註。',
        'allocation_delete' => '允許用戶從服務器刪除分配。',
        'allocation_create' => '允許用戶為服務器分配額外的端口。',
        'database_create' => '允許用戶為服務器創建新數據庫。',
        'database_read' => '允許用戶查看服務器數據庫。',
        'database_update' => '允許用戶修改數據庫。如果用戶同時沒有"查看密碼"權限，他們將無法修改密碼。',
        'database_delete' => '允許用戶刪除數據庫實例。',
        'database_view_password' => '允許用戶在系統中查看數據庫密碼。',
        'schedule_create' => '允許用戶為服務器創建新的排程。',
        'schedule_read' => '允許用戶查看服務器的排程。',
        'schedule_update' => '允許用戶修改現有的服務器排程。',
        'schedule_delete' => '允許用戶刪除服務器的排程。',
        'backup_create' => '允許用戶為此服務器創建新備份。',
        'backup_read' => '允許用戶查看此服務器的所有現有備份。',
        'backup_delete' => '允許用戶從系統中刪除備份。',
        'backup_download' => '允許用戶下載服務器的備份。危險：這允許用戶訪問備份中的所有服務器文件。',
        'backup_restore' => '允許用戶恢復服務器的備份。危險：這允許用戶在過程中刪除所有服務器文件。',
    ],
];
