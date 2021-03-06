<?php
return [
    // GENERATOR AND ADMIN PANEL API //

    // General
    'UNDEFINED_RESPONSE_CODE' => 500,
    'TRANSACTION_FAILURE_ILLEGAL_QUEUE_FUNCTION' => 500,
    'TRANSACTION_FAILURE_ILLEGAL_QUEUE_ROLLBACK' => 500,
    'TRANSACTION_FAILURE_ROLLED_BACK' => 500,
    'PHP_NATIVE_EXCEPTION' => 500,
    'UNDEFINED_COMPARATOR' => 500,
    'CLASS_DOESNT_EXIST' => 500,
    'PIVOT_TABLE_NAMES_THE_SAME' => 500,
    'PIVOT_TABLE_NOT_FOUND' => 500,
    'ILLEGAL_CLASS_INSTANCE' => 500,
    'TEMPLATE_PATH_NOT_SET' => 500,
    'UNEXPECTED_TYPE' => 406,
    'PHOTON_INVALID_CACHE_DRIVER' => 500,

    // Change service
    'ILLEGAL_CHANGE_TYPE' => 500,

    // Module
    'MODULE_NOT_FOUND' => 404,
    'MODULE_ENTRY_NOT_FOUND' => 404,
    'MODULE_CREATION_SUCCESS' => 200,
    'MODULE_CREATION_REPORT_SUCCESS' => 200,
    'MODULE_UPDATE_SUCCESS' => 200,
    'MODULE_UPDATE_REPORT_SUCCESS' => 200,
    'MODULE_DELETION_SUCCESS' => 200,
    'MODULE_DELETION_REPORT_SUCCESS' => 200,
    'BAD_TABLE_NAME' => 406,
    'MODULE_CREATION_ERROR_MULTIPLE_DEFAULT_SEARCH_CHOICES' => 500,
    'MODULE_UPDATE_ERROR_MULTIPLE_DEFAULT_SEARCH_CHOICES' => 500,
    'MODULE_CREATION_ERROR_ACTIVE_ENTRY_FILTER_NOT_FOUND' => 500,
    'MODULE_CREATION_ERROR_RELATED_MODULE_DEFAULT_SEARCH_CHOICE_MISSING' => 500,
    'MODULE_CREATION_ERROR_INVALID_FIELD_GROUP' => 500,
    'GET_ALL_MODULES_SUCCESS' => 200,
    'GET_MODULE_INFORMATION_SUCCESS' => 200,
    'MODULE_SAVE_FROM_DATA_FAILED' => 304,
    'MODULE_INVALID_ID' => 406,
    'NOT_INSTANCE_OF_MODULE' => 500,
    'MODULE_HAS_RELATIONS' => 406,
    'MODULE_PARENT_NOT_FOUND' => 404,

    // Module types
    'WRONG_MODULE_TYPE' => 500,
    'GET_ALL_MODULE_TYPES_SUCCESS' => 200,

    // Model
    'CANNOT_MAKE_MODEL_TEMPLATE_FOR_TYPE' => 500,
    'INVALID_MODEL_META_TYPE' => 406,

    // Class
    'INVALID_VISIBILITY_VALUE' => 406,
    'ATTRIBUTE_NAME_MISSING' => 406,
    'FILE_WRITING_FAILURE' => 500,

    // Module entries
    'LOAD_DYNAMIC_MODULE_ENTRIES_SUCCESS' => 200,
    'LOAD_DYNAMIC_MODULE_ENTRY_SUCCESS' => 200,
    'DYNAMIC_MODULE_ENTRY_NOT_FOUND' => 404,
    'SAVE_DYNAMIC_MODULE_ENTRY_SUCCESS' => 200,
    'SAVE_DYNAMIC_MODULE_ENTRIES_SUCCESS' => 200,
    'SAVE_DYNAMIC_MODULE_ENTRY_FAILURE' => 500,
    'DYNAMIC_MODULE_ENTRY_INVALID_ID' => 500,
    'DELETE_DYNAMIC_MODULE_ENTRY_SUCCESS' => 200,
    'ENTRY_SEARCH_SUCCESS' => 200,
    'CANNOT_DELETE_ENTRY_HAS_RELATIONS' => 403,
    'CANNOT_DELETE_ENTRY_HAS_CHILDREN' => 403,
    'SINGLE_ENTRY_MODULE_CAN_HAVE_ONLY_ONE_INSERT' => 500,
    'SINGLE_ENTRY_MODULE_ENTRY_CANNOT_BE_DELETED' => 500,
    'MODULE_IS_SYSTEM_DELETE_FAILURE' => 403,
    'MODULE_EXTENSION_CLASS_NOT_FOUND' => 404,
    'MODULE_EXTENSION_ACTION_NOT_FOUND' => 404,
    'MASS_UPDATE_DYNAMIC_MODULE_ENTRY_SUCCESS' => 200,

    // Migrations
    'MIGRATION_ALREADY_EXISTS' => 406,
    'MIGRATION_COMMAND_NOT_FOUND' => 404,
    'CANNOT_MAKE_MIGRATION_TEMPLATE_FOR_TYPE' => 500,
    'CANNOT_MAKE_MIGRATION_TEMPLATE_FOR_ALL_RELATIONS' => 500,
    'TABLE_NOT_SET_FOR_CREATION' => 500,
    'TABLE_NOT_SET_FOR_UPDATE' => 500,
    'TABLE_NOT_SET_FOR_REMOVAL' => 500,

    // Node
    'REPOSITION_NODE_SUCCESS' => 200,
    'LOAD_NODE_SUCCESS' => 200,
    'NODE_NOT_FOUND' => 404,
    'LOAD_ROOT_NODES_SUCCESS' => 200,
    'LOAD_NODE_ANCESTORS_SUCCESS' => 200,
    'AFFECTED_NODE_NOT_FOUND' => 404,
    'SCOPE_NODE_NOT_FOUND' => 404,
    'TARGET_NODE_NOT_FOUND' => 404,
    'INVALID_NODE_ACTION' => 406,
    'SCOPE_MODULE_NOT_FOUND' => 404,
    'NOT_A_NODE_MODULE' => 500,
    'NODE_MAX_DEPTH_REACHED' => 500,
    'NODE_MAX_DESCENDANT_DEPTH_REACHED' => 500,
    'SCOPE_PARENT_NODE_NOT_FOUND' => 404,
    'PARENT_NODE_NOT_FOUND' => 404,
    'NODE_CHECK_CHILDREN_SUCCESS' => 200,
    'NODE_NESTING_NOT_ALLOWED' => 406,

    // Fields
    'FIELD_NOT_FOUND' => 404,
    'FIELD_SAVE_FROM_DATA_FAILED' => 304,
    'NOT_INSTANCE_OF_FIELD' => 500,
    'BAD_FIELD_NAME' => 500,
    'TRYING_TO_USE_NON_EXISTING_FIELD_AS_ANCHOR_TEXT' => 406,

    // Field types
    'FIELD_TYPE_DOESNT_EXIST' => 404,
    'GET_ALL_FIELD_TYPES_SUCCESS' => 200,
    'NOT_INSTANCE_OF_FIELD_TYPE' => 500,

    // field groups
    'FIELD_GROUP_DELETE_FAILED_FIELD_GROUP_HAS_FIELDS' => 500,

    // Photon
    'PHOTON_SOFT_RESET_SUCCESS' => 200,
    'PHOTON_HARD_RESET_SUCCESS' => 200,
    'PHOTON_SYNC_SUCCESS' => 200,
    'PHOTON_REVERT_TO_SYNC_SUCCESS' => 200,
    'PHOTON_RESET_FORBIDDEN' => 403,
    'PHOTON_MASS_EDITING_DISABLED' => 403,
    'PHOTON_REBUILD_MODULE_MODEL_SUCCESS' => 200,
    'PHOTON_REBUILD_MODULE_EXTENDER_SUCCESS' => 200,
    "PHOTON_LICENSE_KEY_INVALID" => 500,
    'PHOTON_LICENSE_KEY_INVALID_DOMAIN' => 500,
    'PHOTON_LICENSE_KEY_INACTIVE' => 500,
    'PHOTON_LICENSE_KEY_DOMAIN_INACTIVE' => 500,
    'PHOTON_LICENSE_KEY_GENERATED' => 200,
    'PHOTON_LICENSE_KEY_VALID' => 200,
    'PHOTON_LICENSE_KEY_EXPIRING' => 200,
    'PHOTON_LICENSE_KEY_VALIDATION_FAILED' => 500,
    'PHOTON_LICENSE_MAX_NUMBER_OF_USERS' => 500,

    // Users
    'USER_NOT_LOGGED_IN' => 401,
    'GET_LOGGED_IN_USER_SUCCESS' => 200,
    'USER_NOT_FOUND' => 404,
    'USER_LOGIN_SUCCESS' => 200,
    'USER_LOGIN_FAILURE_INVALID_CREDENTIALS' => 401,
    'USER_REGISTER_SUCCESS' => 200,
    'USER_NOT_CONFIRMED' => 401,
    'EMAIL_ADDRESS_CHANGED' => 200,
    'INVALID_EMAIL_CHANGE_CONFIRMATION_CODE' => 406,

    'TOKEN_EXPIRED' => 401,
    'TOKEN_INVALID' => 401,
    'TOKEN_ABSENT' => 401,
    'TOKEN_REFRESH_SUCCESS' => 200,
    'INVALID_USER_CONFIRMATION_CODE' => 401,
    'INVALID_USER_INVITATION_CODE' => 401,
    'USER_CONFIRMATION_SUCCESS' => 200,
    'USER_LOGOUT_SUCCESS' => 200,
    'USER_INVITATION_RESENT' => 200,
    'USER_INVITATION_RESENT_FAILURE' => 401,
    'USER_INVITATION_CANCELED' => 200,
    'USER_INVITATION_CANCELED_FAILURE' => 401,
    'CANNOT_DELETE_SELF' => 403,
    'CANNOT_LOCK_SELF' => 403,
    'PASSWORD_EXPIRED' => 401,
    'INVALID_CSV_FILE' => 406,
    'CSV_FILE_DOESNT_EXIST' => 406,

    // Password
    'PASSWORD_RESET_SUCCESS' => 200,
    'PASSWORD_RESET_FAILURE' => 500,
    'PASSWORD_RESET_INVALID_TOKEN' => 401,
    'PASSWORD_RESET_INVALID_USER' => 401,
    'PASSWORD_CHANGE_SUCCESS' => 200,
    'PASSWORD_CHANGE_FAILURE_WRONG_PASSWORD' => 401,
    'PASSWORD_CHANGE_INVALID_USER' => 401,
    'PASSWORD_RESET_REQUEST_SUCCESS' => 200,
    'PASSWORD_ALREADY_USED' => 406,

    // Impersonation
    'IMPERSONATING_ON' => 200,
    'IMPERSONATING_OFF' => 200,
    'IMPERSONATION_FAILED_USER_NOT_FOUND' => 404,
    'IMPERSONATION_ALREADY_ON' => 400,
    'IMPERSONATION_ALREADY_OFF' => 400,

    // Throttle
    'TOO_MANY_ATTEMPTS' => 429,

    // Forms
    'VALIDATION_ERROR' => 406,

    // Authentication
    'AUTH_UNAUTHORIZED' => 401,

    // Menus
    'CREATE_MENU_SUCCESS' => 200,
    'UPDATE_MENU_SUCCESS' => 200,
    'DELETE_MENU_SUCCESS' => 200,
    'DELETE_SYSTEM_MENU_FORBIDDEN' => 500,
    'LOAD_MENU_SUCCESS' => 200,
    'LOAD_MENUS_SUCCESS' => 200,
    'MENU_NOT_FOUND' => 404,
    'MENU_SAVE_FROM_DATA_FAILED' => 500,

    // Menu Link Types
    'LOAD_MENU_LINK_TYPES_SUCCESS' => 200,
    'MENU_LINK_TYPE_NOT_FOUND' => 404,
    'MENU_LINK_TYPE_HANDLER_NOT_FOUND' => 404,
    'MENU_LINK_TYPE_NOT_ALLOWED' => 404,
    'MENU_ALLOWED_LINK_TYPES_UNABLE_TO_UPDATE' => 404,
    'LOAD_MENU_LINK_TYPE_RESOURCES_SUCCESS' => 200,

    // Menu Items
    'CREATE_MENU_ITEM_SUCCESS' => 200,
    'UPDATE_MENU_ITEM_SUCCESS' => 200,
    'DELETE_MENU_ITEM_SUCCESS' => 200,
    'LOAD_MENU_ITEM_SUCCESS' => 200,
    'LOAD_MENU_ITEMS_SUCCESS' => 200,
    'LOAD_MENU_ITEM_ANCESTORS_SUCCESS' => 200,
    'MENU_ITEM_SAVE_FROM_DATA_FAILED' => 500,
    'MENU_ITEM_NOT_FOUND' => 404,
    'MENU_ITEM_HAS_CHILDREN' => 500,
    'MENU_ITEM_NEWS_EXISTS' => 500,

    // Files
    'FILE_UPLOAD_FAILURE' => 500,
    'FILE_NOT_FOUND' => 404,

    // Permissions
    'INSUFICIENT_PERMISSIONS' => 401,
    'MIN_USERS_PER_ROLE_REACHED' => 403,

    // Notifications
    'NOTIFICATION_HELPER_DOESNT_EXIST' => 404,
    'NOTIFICATION_SENT' => 200,
    'NOTIFICATION_READ' => 200,
    'NOTIFICATION_NOT_FOUND' => 404,
    'GET_NOTIFICATIONS_SUCCESS' => 200,
    'GET_UNREAD_NOTIFICATIONS_SUCCESS' => 200,
    'FCM_TOKEN_ADD_SUCCESS' => 200,
    'FCM_TOKEN_REMOVE_SUCCESS' => 200,
    'GET_UNREAD_NOTIFICATIONS_COUNT_SUCCESS' => 200,

    // Subscriber
    'SUBSCRIPTION_SUCCESS' => 200,
    'UNSUBSCRIPTION_SUCCESS' => 200,

    // Exporters
    'EXPORTER_TYPE_NOT_SUPPORTED' => 406,
    'DYNAMIC_MODULE_EXPORTER_MISSING' => 404,
    'MODULE_DATA_EXPORTED_SUCCESSFULLY' => 200,
    'EXPORTING_NOT_SUPPORTED' => 406,
    'EXPORT_METHOD_DOESNT_EXIST' => 404,
    'DYNAMIC_MODULE_EXPORTER_TEMPLATE_MISSING' => 404,

    // IAPI
    'ILLEGAL_IAPI_METHOD' => 406,
    'IAPI_DECODER_DOESNT_EXIST' => 404,
    'UNDEFINED_IAPI_ROUTE' => 404,

    // Image
    'IMAGE_FACTORY_DOESNT_EXIST' => 404,
    'IMAGE_GATEWAY_DOESNT_EXIST' => 404,
    'UNSUPPORTED_MIME_TYPE' => 406,
    'FAILED_TO_READ_FILE_MIME_TYPE' => 500,
    'FAILED_TO_LOAD_IMAGE_RESOURCE' => 500,
    'RESIZED_IMAGE_REBUILD_SUCCESS' => 200,

    // Rekognition
    'FAILED_TO_CONNECT_WITH_REKOGNITION_SERVICE' => 404,
    'REKOGNITION_SERVICE_RETURNED_UNEXPECTED_DATA' => 500,
];
