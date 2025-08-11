<?php

namespace Filafly\Icons\Iconoir;

use Filafly\Icons\Iconoir\Enums\Iconoir;
use Filafly\Icons\Iconoir\Enums\IconoirStyle;
use Filafly\Icons\IconSet;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

class IconoirIcons extends IconSet
{
    protected string $pluginId = 'filafly-filament-iconoir-icons';

    protected mixed $iconEnum = Iconoir::class;

    protected string $iconPrefix = 'iconoir';

    protected mixed $styleEnum = IconoirStyle::class;

    protected array $iconMap = [
        // Panels icon aliases
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Iconoir::Search,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Iconoir::Filter,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Iconoir::Home,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Iconoir::ArrowRight,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Iconoir::ArrowLeft,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Iconoir::Edit,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Iconoir::ViewGrid,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Iconoir::Eye,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Iconoir::NavArrowLeft,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Iconoir::NavArrowRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Iconoir::NavArrowRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Iconoir::NavArrowLeft,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Iconoir::NavArrowUp,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Iconoir::CreditCard,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Iconoir::Settings,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Iconoir::Plus,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Iconoir::NavArrowDown,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Iconoir::SunLight,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Iconoir::HalfMoon,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Iconoir::Computer,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Iconoir::Xmark,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Iconoir::Menu,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Iconoir::NavArrowDown,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Iconoir::Bell,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => Iconoir::User,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Iconoir::LogOut,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Iconoir::LogOut,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Iconoir::Book,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => Iconoir::Github,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Iconoir::Copy,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Iconoir::NavArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Iconoir::Trash,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Iconoir::NavArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Iconoir::ArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Iconoir::ArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Iconoir::ArrowSeparateVertical,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Iconoir::Search,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Iconoir::Crop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Iconoir::Drag,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Iconoir::Flip,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Iconoir::ArrowSeparateVertical,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Iconoir::ArrowDownCircle,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Iconoir::ArrowLeftCircle,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Iconoir::ArrowRightCircle,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Iconoir::ArrowUpCircle,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Iconoir::LongArrowUpLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Iconoir::LongArrowUpRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Iconoir::ZoomOut,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Iconoir::ZoomIn,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Iconoir::ZoomOut,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Iconoir::Trash,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Iconoir::ArrowSeparateVertical,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Iconoir::Copy,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Iconoir::NavArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Iconoir::Trash,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Iconoir::NavArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Iconoir::ArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Iconoir::ArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Iconoir::ArrowSeparateVertical,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Iconoir::Plus,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Iconoir::Edit,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Iconoir::EyeClosed,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Iconoir::Eye,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Iconoir::Xmark,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Iconoir::Check,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => Iconoir::Check,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => Iconoir::ArrowSeparateVertical,
        TablesIconAlias::ACTIONS_FILTER => Iconoir::Filter,
        TablesIconAlias::ACTIONS_GROUP => Iconoir::ViewGrid,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Iconoir::MoreVert,
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => Iconoir::ViewColumns3,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Iconoir::NavArrowDown,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Iconoir::XmarkCircle,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Iconoir::CheckCircle,
        TablesIconAlias::EMPTY_STATE => Iconoir::Xmark,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Iconoir::CheckCircle,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Iconoir::Calendar,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Iconoir::Calculator,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Iconoir::Link,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Iconoir::ArrowSeparateVertical,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Iconoir::Text,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Iconoir::Xmark,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Iconoir::NavArrowUp,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Iconoir::NavArrowUp,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => Iconoir::NavArrowDown,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Iconoir::NavArrowDown,
        TablesIconAlias::REORDER_HANDLE => Iconoir::DotsGrid3x3,
        TablesIconAlias::SEARCH_FIELD => Iconoir::Search,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Iconoir::Xmark,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Iconoir::Xmark,
        NotificationsIconAlias::NOTIFICATION_DANGER => Iconoir::WarningTriangle,
        NotificationsIconAlias::NOTIFICATION_INFO => Iconoir::InfoCircle,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Iconoir::CheckCircle,
        NotificationsIconAlias::NOTIFICATION_WARNING => Iconoir::WarningTriangle,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => Iconoir::MoreVert,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Iconoir::Plus,
        ActionsIconAlias::DELETE_ACTION => Iconoir::Trash,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Iconoir::Trash,
        ActionsIconAlias::DELETE_ACTION_MODAL => Iconoir::Trash,
        ActionsIconAlias::DETACH_ACTION => Iconoir::LinkXmark,
        ActionsIconAlias::DETACH_ACTION_MODAL => Iconoir::LinkXmark,
        ActionsIconAlias::DISSOCIATE_ACTION => Iconoir::LinkXmark,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Iconoir::LinkXmark,
        ActionsIconAlias::EDIT_ACTION => Iconoir::Edit,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Iconoir::Edit,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Iconoir::Download,
        ActionsIconAlias::FORCE_DELETE_ACTION => Iconoir::Trash,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Iconoir::Trash,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Iconoir::Trash,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Iconoir::Upload,
        ActionsIconAlias::MODAL_CONFIRMATION => Iconoir::WarningTriangle,
        ActionsIconAlias::REPLICATE_ACTION => Iconoir::Copy,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Iconoir::Copy,
        ActionsIconAlias::RESTORE_ACTION => Iconoir::Undo,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => Iconoir::Undo,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Iconoir::Undo,
        ActionsIconAlias::VIEW_ACTION => Iconoir::Eye,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Iconoir::Eye,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Iconoir::XmarkCircle,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Iconoir::CheckCircle,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Iconoir::Check,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => Iconoir::Xmark,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Iconoir::NavArrowRight,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Iconoir::NavArrowLeft,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Iconoir::Xmark,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Iconoir::FastArrowLeft,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Iconoir::FastArrowRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Iconoir::FastArrowRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Iconoir::FastArrowLeft,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Iconoir::NavArrowRight,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Iconoir::NavArrowLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Iconoir::NavArrowLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Iconoir::NavArrowRight,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Iconoir::NavArrowDown,
    ];
}
