/**
 * Returns the entry fields configuration object
 *
 * @param   {object}  vueComponent
 * @return  {array}
 */
export const getEntryFields = (vueComponent) => {
    let configuration = [{
        disabled: vueComponent.menuItemsEditor.editorMode === 'edit',
        hidden: false,
        id: 1,
        isSystem: false,
        label: 'Menu Item Link Type',
        lazyLoading: false,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'menu_link_type_id',
        preloadDataConfig: {
            method: 'get',
            resultsObjectPath: 'body.body.menu.menu_link_types',
            url: `menus/${vueComponent.menuItemsEditor.selectedMenu.id}`,
            valuesOfInterest: {
                id: 'id',
                text: 'title',
            },
        },
        preselectFirst: true,
        relatedEntry: null,
        relatedTableName: false,
        required: true,
        tooltip: vueComponent.$t('menuEditor.menuLinkTypeIDTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.menu_link_type_id,
        vueComponent: 'ManyToMany',
    }, {
        disabled: false,
        hidden: false,
        id: 2,
        isSystem: false,
        label: 'Title',
        lazyLoading: false,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'title',
        relatedEntry: null,
        relatedTableName: false,
        required: false,
        tooltip: vueComponent.$t('menuEditor.titleTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.title,
        vueComponent: 'InputText',
    }, {
        disabled: vueComponent.slugDisabled,
        hidden: false,
        id: 3,
        isSystem: false,
        label: 'Slug',
        lazyLoading: false,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'slug',
        relatedEntry: null,
        relatedTableName: false,
        required: false,
        tooltip: vueComponent.$t('menuEditor.slugTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.slug,
        vueComponent: 'InputText',
    }, {
        disabled: vueComponent.staticLinkDisabled,
        hidden: false,
        id: 4,
        isSystem: false,
        label: 'Static Link',
        lazyLoading: false,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'staticLink',
        relatedEntry: null,
        relatedTableName: false,
        required: false,
        tooltip: vueComponent.$t('menuEditor.staticLinkTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.staticLink,
        vueComponent: 'InputText',
    }, {
        disabled: vueComponent.adminModuleDisabled,
        hidden: false,
        id: 5,
        isSystem: false,
        label: 'Admin Module',
        lazyLoading: false,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'adminModule',
        preloadDataConfig: {
            method: 'get',
            resultsObjectPath: 'body.body.modules',
            sortBy: ['name'],
            url: 'modules',
            valuesOfInterest: {
                id: 'id',
                text: 'name',
            },
        },
        preselectFirst: true,
        relatedEntry: null,
        relatedTableName: false,
        required: true,
        tooltip: vueComponent.$t('menuEditor.adminModuleTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.adminModule,
        vueComponent: 'ManyToMany',
    }, {
        disabled: vueComponent.adminEntryDisabled,
        hidden: false,
        id: 6,
        isSystem: false,
        label: 'Admin Module Entry',
        lazyLoading: true,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'adminEntry',
        // preloadDataConfig: {},
        relatedEntry: null,
        relatedTableName: vueComponent.menuItemsEditor.selectedModule.table_name,
        required: true,
        tooltip: vueComponent.$t('menuEditor.adminEntryTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.adminEntry,
        vueComponent: 'ManyToMany',
    }, {
        disabled: vueComponent.iconDisabled,
        hidden: false,
        id: 6,
        isSystem: false,
        label: 'Icon',
        lazyLoading: false,
        multiple: false,
        mutation: 'menuItemsEditor/UPDATE_MENU_ITEM_FIELD',
        fieldGroupId: null,
        name: 'icon',
        preloadDataConfig: {},
        relatedEntry: null,
        relatedTableName: false,
        required: false,
        tooltip: vueComponent.$t('menuEditor.iconTooltip'),
        value: vueComponent.menuItemsEditor.editedEntry.icon,
        vueComponent: 'BootstrapIconPicker',
    }];

    return configuration;
};
