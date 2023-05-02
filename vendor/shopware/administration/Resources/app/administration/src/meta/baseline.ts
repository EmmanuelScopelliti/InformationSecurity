/**
 * @package admin
 */

const missingTests = [
    'missing-tests-baseline.ts',
    'sw-vue-devtools.ts',
    'icons.js',
    'app-action-fixtures.js',
    'sw-address/index.ts',
    'sw-button-group/index.js',
    'sw-button-process/index.js',
    'sw-card-filter/index.js',
    'sw-card-section/index.js',
    'sw-collapse/index.js',
    'sw-container/index.js',
    'sw-description-list/index.js',
    'sw-help-text/index.js',
    'sw-highlight-text/index.js',
    'sw-icon/index.js',
    'legacy-icon-mapping.js',
    'legacy-space-mapping.js',
    'sw-inheritance-switch/index.js',
    'sw-modal/index.js',
    'sw-price-preview/index.js',
    'sw-product-image/index.js',
    'sw-radio-panel/index.js',
    'sw-sorting-select/index.js',
    'sw-tabs-item/index.js',
    'sw-user-card/index.js',
    'sw-campaign-property-mapping/index.js',
    'components.js',
    'sw-context-menu/index.js',
    'sw-context-menu-divider/index.js',
    'sw-context-menu-item/index.js',
    'sw-data-grid-column-boolean/index.js',
    'sw-data-grid-column-position/index.js',
    'sw-data-grid-inline-edit/index.js',
    'sw-data-grid-skeleton/index.js',
    'sw-extension-component-section/index.ts',
    'sw-sidebar-filter-panel/index.js',
    'sw-base-field/index.js',
    'sw-block-field/index.js',
    'sw-contextual-field/index.js',
    'sw-field-error/index.js',
    'sw-select-result-list/index.js',
    'sw-entity-multi-id-select/index.js',
    'sw-entity-tag-select/index.js',
    'sw-boolean-radio-group/index.js',
    'sw-checkbox-field/index.js',
    'sw-compact-colorpicker/index.js',
    'sw-confirm-field/index.js',
    'sw-email-field/index.js',
    'sw-field/index.js',
    'sw-field-copyable/index.js',
    'sw-gtc-checkbox/index.js',
    'sw-maintain-currencies-modal/index.js',
    'sw-select-field/index.js',
    'sw-select-number-field/index.js',
    'sw-select-option/index.js',
    'sw-tagged-field/index.js',
    'sw-text-editor-table-toolbar/index.js',
    'sw-text-editor-toolbar/index.js',
    'sw-text-editor-toolbar-button/index.js',
    'sw-text-editor-toolbar-table-button/index.js',
    'sw-textarea-field/index.js',
    'sw-grid/index.js',
    'sw-grid-column/index.js',
    'sw-grid-row/index.js',
    'sw-media-add-thumbnail-form/index.js',
    'sw-media-base-item/index.js',
    'sw-media-entity-mapper/index.js',
    'sw-media-folder-content/index.js',
    'sw-media-list-selection-item-v2/index.js',
    'sw-media-list-selection-v2/index.js',
    'sw-media-media-item/index.js',
    'sw-media-modal-folder-dissolve/index.js',
    'sw-media-modal-folder-settings/index.js',
    'sw-media-modal-move/index.js',
    'sw-media-modal-replace/index.js',
    'sw-media-preview-v2/index.js',
    'sw-media-replace/index.js',
    'sw-media-url-form/index.js',
    'sw-sidebar-media-item/index.js',
    'sw-condition-billing-country/index.js',
    'sw-condition-billing-street/index.js',
    'sw-condition-billing-zip-code/index.js',
    'sw-condition-cart-has-delivery-free-item/index.js',
    'sw-condition-cart-position-price/index.js',
    'sw-condition-cart-tax-display/index.js',
    'sw-condition-currency/index.js',
    'sw-condition-customer-birthday/index.js',
    'sw-condition-customer-custom-field/index.js',
    'sw-condition-customer-group/index.js',
    'sw-condition-customer-logged-in/index.js',
    'sw-condition-customer-number/index.js',
    'sw-condition-customer-tag/index.js',
    'sw-condition-date-range/index.js',
    'sw-condition-day-of-week/index.js',
    'sw-condition-days-since-last-order/index.js',
    'sw-condition-different-addresses/index.js',
    'sw-condition-email/index.js',
    'sw-condition-generic-line-item/index.js',
    'sw-condition-goods-count/index.js',
    'sw-condition-goods-price/index.js',
    'sw-condition-is-always-valid/index.js',
    'sw-condition-is-company/index.js',
    'sw-condition-is-guest/index.js',
    'sw-condition-is-new-customer/index.js',
    'sw-condition-is-newsletter-recipient/index.js',
    'sw-condition-language/index.js',
    'sw-condition-last-name/index.js',
    'sw-condition-line-item/index.js',
    'sw-condition-line-item-actual-stock/index.js',
    'sw-condition-line-item-clearance-sale/index.js',
    'sw-condition-line-item-creation-date/index.js',
    'sw-condition-line-item-custom-field/index.js',
    'sw-condition-line-item-dimension-volume/index.js',
    'sw-condition-line-item-dimension-weight/index.js',
    'sw-condition-line-item-goods-total/index.js',
    'sw-condition-line-item-in-category/index.js',
    'sw-condition-line-item-in-product-stream/index.js',
    'sw-condition-line-item-is-new/index.js',
    'sw-condition-line-item-list-price/index.js',
    'sw-condition-line-item-list-price-ratio/index.js',
    'sw-condition-line-item-of-manufacturer/index.js',
    'sw-condition-line-item-of-type/index.js',
    'sw-condition-line-item-promoted/index.js',
    'sw-condition-line-item-property/index.js',
    'sw-condition-line-item-purchase-price/index.js',
    'sw-condition-line-item-release-date/index.js',
    'sw-condition-line-item-stock/index.js',
    'sw-condition-line-item-tag/index.js',
    'sw-condition-line-item-taxation/index.js',
    'sw-condition-line-item-total-price/index.js',
    'sw-condition-line-item-unit-price/index.js',
    'sw-condition-line-item-with-quantity/index.js',
    'sw-condition-line-items-in-cart/index.js',
    'sw-condition-line-items-in-cart-count/index.js',
    'sw-condition-not-found/index.js',
    'sw-condition-order-count/index.js',
    'sw-condition-order-total-amount/index.js',
    'sw-condition-payment-method/index.js',
    'sw-condition-promotion-code-of-type/index.js',
    'sw-condition-promotion-line-item/index.js',
    'sw-condition-promotion-value/index.js',
    'sw-condition-promotions-in-cart-count/index.js',
    'sw-condition-sales-channel/index.js',
    'sw-condition-shipping-country/index.js',
    'sw-condition-shipping-method/index.js',
    'sw-condition-shipping-street/index.js',
    'sw-condition-time-range/index.js',
    'sw-condition-volume-of-cart/index.js',
    'sw-condition-weight-of-cart/index.js',
    'sw-condition-base-line-item/index.js',
    'sw-condition-is-net-select/index.js',
    'sw-condition-modal/index.js',
    'sw-sidebar/index.js',
    'sw-sidebar-collapse/index.js',
    'sw-sidebar-item/index.js',
    'sw-sidebar-navigation-item/index.js',
    'sw-admin/index.js',
    'catalogues.js',
    'sw-card-view/index.js',
    'sw-discard-changes-modal/index.js',
    'sw-error/index.js',
    'sw-hidden-iframes/index.js',
    'sw-inheritance-warning/index.js',
    'sw-modals-renderer/index.ts',
    'sw-page/index.js',
    'sw-sales-channel-config/index.js',
    'sw-sales-channel-switch/index.js',
    'sw-search-more-results/index.js',
    'treeItems.js',
    'sw-tree-input-field/index.js',
    'sw-color-badge/index.js',
    'sw-ignore-class/index.js',
    'sw-license-violation/index.js',
    'sw-notification-center/index.js',
    'sw-notification-center-item/index.js',
    'sw-notifications/index.js',
    'sw-overlay/index.js',
    'sw-popover/index.js',
    'sw-progress-bar/index.js',
    'sw-skeleton/index.ts',
    'sw-skeleton-bar/index.ts',
    'sw-step-display/index.js',
    'sw-step-item/index.js',
    'sw-text-preview/index.js',
    'sw-upload-listener/index.js',
    'sw-verify-user-modal/index.js',
    'sw-vnode-renderer/index.js',
    'sw-wizard-dot-navigation/index.js',
    'sw-wizard-page/index.js',
    'decorator/index.js',
    'state-styling-provider.decorator.js',
    'autofocus.directive.ts',
    'dragdrop.directive.js',
    'directive/index.js',
    'popover.directive.js',
    'responsive.directive.js',
    'tooltip.directive.js',
    'asset.filter.ts',
    'date.filter.ts',
    'file-size.filter.js',
    'filter/index.js',
    'media-name.filter.js',
    'salutation.filter.ts',
    'stock-color-variant.filter.js',
    'striphtml.filter.ts',
    'thumbnail-size.filter.js',
    'truncate.filter.js',
    'unicode-uri.js',
    'action-button.init.ts',
    'actions.init.ts',
    'cms.init.ts',
    'component-helper.init.js',
    'component.init.js',
    'context.init.ts',
    'directive.init.js',
    'entity.init.js',
    'extension-component-sections.init.ts',
    'extension-data-handling.init.ts',
    'filter-factory.init.js',
    'filter.init.js',
    'http.init.js',
    'init/index.js',
    'locale.init.js',
    'login.init.js',
    'main-module.init.ts',
    'menu-item.init.ts',
    'mixin.init.js',
    'modals.init.ts',
    'modules.init.js',
    'notification.init.ts',
    'repository.init.js',
    'router.init.js',
    'settings-item.init.ts',
    'shortcut.init.js',
    'svg-icons.init.js',
    'window.init.ts',
    'cookie.init.ts',
    'init-post/index.js',
    'language.init.js',
    'marketing.init.js',
    'user-information.init.js',
    'worker.init.js',
    'api-services.init.js',
    'init-pre/index.js',
    'state.init.js',
    'main.ts',
    'discard-detail-page-changes.mixin.js',
    'form-field.mixin.js',
    'generic-condition.mixin.js',
    'mixin/index.js',
    'listing.mixin.js',
    'notification.mixin.ts',
    'placeholder.mixin.js',
    'position.mixin.js',
    'remove-api-error.mixin.js',
    'rule-container.mixin.js',
    'salutation.mixin.js',
    'sw-inline-snippet.mixin.js',
    'user-settings.mixin.js',
    'validation.mixin.js',
    'device-helper.plugin.js',
    'plugin/index.js',
    'sanitize.plugin.js',
    'route/index.js',
    'feature.service.ts',
    'language-auto-fetching.service.js',
    'license-violations.service.js',
    'locale-to-language.service.js',
    'search-preferences.service.js',
    'search-type.service.js',
    'shortcut.service.js',
    'action-button.store.ts',
    'admin-menu.store.js',
    'context.store.ts',
    'error.store.js',
    'extension-component-sections.store.ts',
    'extension-entry-routes.js',
    'extension-sdk-module.store.ts',
    'extensions.store.ts',
    'state/index.js',
    'license-violation.store.js',
    'main-module.store.ts',
    'menu-item.store.ts',
    'modals.store.ts',
    'notification.store.js',
    'rule-conditions-config.store.js',
    'sdk-location.store.ts',
    'settings-item.store.js',
    'shopware-apps.store.ts',
    'system.store.js',
    'tabs.store.ts',
    'view.adapter.ts',
    'ShopwareError.js',
    'changeset-generator.data.js',
    'criteria.data.ts',
    'entity-definition.data.js',
    'entity-factory.data.js',
    'entity-hydrator.data.ts',
    'entity.data.ts',
    'login.error-codes.js',
    'error-resolver.data.js',
    'error-store.data.js',
    'filter-factory.data.js',
    'data/index.js',
    'repository-factory.data.ts',
    'extension-api.ts',
    'api-context.factory.js',
    'api-service.factory.js',
    'app-context.factory.js',
    'classes-factory.js',
    'directive.factory.js',
    'entity-definition.factory.js',
    'entity.factory.js',
    'filter.factory.ts',
    'locale.factory.ts',
    'mixin.factory.ts',
    'plugin-boot.factory.js',
    'router.factory.js',
    'service.factory.ts',
    'shortcut.factory.js',
    'state-deprecated.factory.js',
    'state.factory.ts',
    'template.factory.js',
    'feature.ts',
    'device.helper.js',
    'middleware.helper.js',
    'refresh-token.helper.js',
    'store-loader.helper.js',
    'upload-task.helper.js',
    'acl.api.service.js',
    'app-cms-blocks.service.js',
    'business-events.api.service.js',
    'cache.api.service.js',
    'checkout-store.api.service.ts',
    'config.api.service.js',
    'customer-group-registration.api.service.js',
    'customer-validation.api.service.js',
    'excludedSearchTerm.api.service.js',
    'extension-sdk.service.ts',
    'first-run-wizard.api.service.js',
    'flow-actions.api.service.js',
    'import-export.api.service.js',
    'api/index.js',
    'integration.api.service.js',
    'known-ips.api.service.js',
    'language-plugin.api.service.js',
    'mail.api.service.js',
    'marketing.service.js',
    'media-folder.api.service.js',
    'media.api.service.js',
    'message-queue.api.service.js',
    'number-range.api.service.js',
    'order-state-machine.api.service.ts',
    'order.api.service.js',
    'product-export.api.service.js',
    'product-stream-preview.service.js',
    'recommendations.api.service.js',
    'sales-channel.api.service.js',
    'scheduled-task.api.service.js',
    'search.api.service.js',
    'seo-url-template.api.service.js',
    'seo-url.api.service.js',
    'snippet-set.api.service.js',
    'snippet.api.service.js',
    'state-machine.api.service.js',
    'store-context.api.service.ts',
    'sync.api.service.js',
    'update.api.service.js',
    'user-config.api.service.js',
    'user-input-sanitize.service.js',
    'user-recovery.api.service.js',
    'user-validation.api.service.js',
    'user.api.service.js',
    'api.service.ts',
    'customer-group-registration-listener.service.js',
    'entity-mapping.service.js',
    'plugin-updates-listener.service.js',
    'shopware-updates-listener.service.js',
    'timezone.service.js',
    'util.service.ts',
    'debug.utils.ts',
    'dom.utils.ts',
    'object.utils.ts',
    'sort.utils.ts',
    'string.utils.ts',
    'validation.service.js',
    'admin-notification-worker.js',
    'worker-notification-listener.js',
    'global.types.ts',
    'module/index.js',
    'sw-bulk-edit-product-description/index.js',
    'sw-bulk-edit-form-field-renderer/index.js',
    'sw-bulk-edit-order-documents-download-documents/index.js',
    'sw-bulk-edit-order-documents-generate-cancellation-invoice/index.js',
    'sw-bulk-edit-order-documents-generate-credit-note/index.js',
    'sw-bulk-edit-save-modal-confirm/index.js',
    'sw-bulk-edit-save-modal-error/index.js',
    'sw-bulk-edit/index.js',
    'services.init.js',
    'bulk-edit-base.handler.js',
    'bulk-edit-customer.handler.js',
    'bulk-edit-order.handler.js',
    'sw-category-entry-point-overwrite-modal/index.js',
    'sw-category-sales-channel-card/index.js',
    'sw-category-sales-channel-multi-select/index.js',
    'sw-category-view/index.js',
    'sw-landing-page-view/index.js',
    'default-search-configuration.js',
    'sw-category/index.js',
    'sw-category-detail-cms/index.js',
    'sw-category-detail-seo/index.js',
    'sw-landing-page-detail-base/index.js',
    'sw-landing-page-detail-cms/index.js',
    'component/index.js',
    'cross-selling/index.js',
    'preview/index.js',
    'gallery-buybox/index.js',
    'product-description-reviews/index.js',
    'product-heading/index.js',
    'product-listing/index.js',
    'product-slider/index.js',
    'product-three-column/index.js',
    'form/index.js',
    'image/index.js',
    'image-bubble-row/index.js',
    'image-cover/index.js',
    'image-four-column/index.js',
    'image-gallery/index.js',
    'image-highlight-row/index.js',
    'image-simple-grid/index.js',
    'image-slider/index.js',
    'image-three-column/index.js',
    'image-three-cover/index.js',
    'image-two-column/index.js',
    'blocks/index.js',
    'category-navigation/index.js',
    'sidebar-filter/index.js',
    'text/index.js',
    'text-hero/index.js',
    'text-teaser/index.js',
    'text-teaser-section/index.js',
    'text-three-column/index.js',
    'text-two-column/index.js',
    'center-text/index.js',
    'image-text/index.js',
    'image-text-bubble/index.js',
    'image-text-cover/index.js',
    'image-text-gallery/index.js',
    'image-text-row/index.js',
    'text-on-image/index.js',
    'vimeo-video/index.js',
    'youtube-video/index.js',
    'sw-cms-block-config/index.js',
    'sw-cms-block-layout-config/index.js',
    'sw-cms-create-wizard/index.js',
    'sw-cms-mapping-field/index.js',
    'sw-cms-page-select/index.js',
    'sw-cms-product-box-preview/index.js',
    'sw-cms-section-config/index.js',
    'sw-cms-sidebar-nav-element/index.js',
    'sw-cms-stage-add-block/index.js',
    'sw-cms-stage-section-selection/index.js',
    'sw-cms-toolbar/index.js',
    'sw-cms.constant.js',
    'config/index.js',
    'buy-box/index.js',
    'form-contact/index.js',
    'form-newsletter/index.js',
    'elements/index.js',
    'component/index.ts',
    'config/index.ts',
    'location-renderer/index.ts',
    'preview/index.ts',
    'manufacturer-logo/index.js',
    'product-box/index.js',
    'sw-cms-el-config-product-listing-config-filter-properties-grid/index.js',
    'product-name/index.js',
    'sidebar-category-navigation/index.js',
    'sw-cms/index.js',
    'sw-cms-element.mixin.js',
    'sw-cms-state.mixin.js',
    'cmsDataResolver.service.js',
    'cms-page.state.js',
    'sw-customer-address-form-options/index.js',
    'sw-customer-default-addresses/index.js',
    'sw-customer.constant.js',
    'sw-customer/index.js',
    'sw-dashboard-external-link/index.js',
    'sw-dashboard/index.js',
    'sw-event-action-deprecated-alert/index.js',
    'sw-event-action-deprecated-modal/index.js',
    'sw-event-action/index.js',
    'sw-extension/index.js',
    'sw-extension-error.mixin.js',
    'sw-extension-my-extensions-index/index.js',
    'sw-extension-my-extensions-recommendation/index.js',
    'extension-error-handler.service.ts',
    'extension-error.service.js',
    'extension-store-action.service.ts',
    'service/index.ts',
    'store/index.ts',
    'sw-extension-sdk/index.js',
    'sw-plugin-card/index.js',
    'sw-first-run-wizard/index.js',
    'index/index.js',
    'sw-first-run-wizard-data-import/index.js',
    'sw-first-run-wizard-defaults/index.js',
    'sw-first-run-wizard-finish/index.js',
    'sw-first-run-wizard-mailer-base/index.js',
    'sw-first-run-wizard-mailer-local/index.js',
    'sw-first-run-wizard-markets/index.js',
    'sw-first-run-wizard-paypal-base/index.js',
    'sw-first-run-wizard-paypal-credentials/index.js',
    'sw-first-run-wizard-paypal-info/index.js',
    'sw-first-run-wizard-shopware-account/index.js',
    'sw-first-run-wizard-shopware-base/index.js',
    'sw-first-run-wizard-shopware-domain/index.js',
    'sw-first-run-wizard-store/index.js',
    'sw-first-run-wizard-welcome/index.js',
    'sw-flow-leave-page-modal/index.js',
    'sw-flow-sequence-modal/index.js',
    'flow.constant.js',
    'sw-flow/index.js',
    'flow.state.js',
    'sw-import-export-new-profile-wizard/index.js',
    'sw-import-export-new-profile-wizard-csv-page/index.js',
    'sw-import-export-new-profile-wizard-general-page/index.js',
    'sw-import-export-new-profile-wizard-mapping-page/index.js',
    'sw-import-export-activity-detail-modal/index.js',
    'sw-import-export-edit-profile-field-indicators/index.js',
    'sw-import-export/index.js',
    'mappings.mock.js',
    'sw-import-export-view-export/index.js',
    'sw-import-export-view-import/index.js',
    'sw-integration/index.js',
    'sw-landing-page/index.js',
    'sw-login/index.js',
    'sw-login-recovery-recovery/index.js',
    'sw-mail-template/index.js',
    'mail-template-extension/index.js',
    'sw-mail-header-footer-create/index.js',
    'sw-mail-template-create/index.js',
    'sw-manufacturer/index.js',
    'sw-media-quickinfo-metadata-item/index.js',
    'sw-media-quickinfo-multiple/index.js',
    'sw-media-sidebar/index.js',
    'sw-media-tag/index.js',
    'sw-media-breadcrumbs/index.js',
    'sw-media-collapse/index.js',
    'sw-media-display-options/index.js',
    'sw-media-grid/index.js',
    'sw-media/index.js',
    'media-grid-listener.mixin.js',
    'media-sidebar-modal.mixin.js',
    'sw-my-apps-error-page/index.js',
    'sw-my-apps/index.js',
    'sw-newsletter-recipient-filter-switch/index.js',
    'sw-newsletter-recipient/index.js',
    'sw-order-create-address-modal/index.js',
    'sw-order-create-details-body/index.js',
    'sw-order-create-details-header/index.js',
    'sw-order-create-invalid-promotion-modal/index.js',
    'sw-order-create-promotion-modal/index.js',
    'sw-order-customer-comment/index.js',
    'sw-order-delivery-metadata/index.js',
    'sw-order-document-settings-delivery-note-modal/index.js',
    'sw-order-document-settings-invoice-modal/index.js',
    'sw-order-inline-field/index.js',
    'sw-order-leave-page-modal/index.js',
    'sw-order-nested-line-items-row/index.js',
    'sw-order-new-customer-modal/index.js',
    'sw-order-promotion-tag-field/index.js',
    'sw-order-saveable-field/index.js',
    'sw-order-send-document-modal/index.js',
    'sw-order-state-change-modal/index.js',
    'sw-order-state-change-modal-attach-documents/index.js',
    'sw-order-state-history-card-entry/index.js',
    'sw-order-state-history-modal/index.js',
    'sw-order-state-select-v2/index.js',
    'sw-order/index.js',
    'cart-notification.mixin.ts',
    'order-cart.mixin.ts',
    'order.types.ts',
    'order-detail.store.js',
    'order.store.ts',
    'sw-order-create-initial/index.js',
    'sw-order-detail-details/index.js',
    'sw-order-detail-documents/index.js',
    'sw-order-detail-general/index.js',
    'sw-privilege-error/index.js',
    'sw-product-basic-form/index.js',
    'sw-product-cross-selling-form/index.js',
    'sw-product-packaging-form/index.js',
    'sw-product-settings-form/index.js',
    'sw-product-modal-variant-generation/index.js',
    'sw-product-restriction-selection/index.js',
    'sw-product-variants-configurator-prices/index.js',
    'sw-product-variants-configurator-restrictions/index.js',
    'sw-product-variants-price-field/index.js',
    'sw-product-variants-delivery-listing/index.js',
    'sw-product-visibility-detail/index.js',
    'sw-product-visibility-select/index.js',
    'sw-product/index.js',
    'sw-product-stream/index.js',
    'sw-product-stream-list/index.js',
    'sw-admin-menu/index.js',
    'sw-profile/index.js',
    'sw-profile.state.js',
    'sw-promotion-rule-select/index.js',
    'sw-promotion-sales-channel-select/index.js',
    'promotion.helper.js',
    'sw-promotion/index.js',
    'persona-customer-grid.service.js',
    'sw-promotion-detail-base/index.js',
    'sw-promotion-detail-restrictions/index.js',
    'sw-promotion-v2-settings-discount-type/index.js',
    'sw-promotion-v2-settings-rule-selection/index.js',
    'sw-promotion-v2-settings-trigger/index.js',
    'sw-promotion-v2-wizard-description/index.js',
    'sw-promotion-v2-wizard-discount-selection/index.js',
    'sw-promotion-v2-sales-channel-select/index.js',
    'sw-promotion-v2/index.js',
    'promotion-code.api.service.js',
    'sw-property-detail-base/index.js',
    'sw-property-option-detail/index.js',
    'sw-property/index.js',
    'sw-property-create/index.js',
    'sw-review/index.js',
    'sw-sales-channel-modal-detail/index.js',
    'sw-sales-channel-modal-grid/index.js',
    'sw-sales-channel/index.js',
    'sw-sales-channel-list/index.js',
    'billiger-de/index.js',
    'google-product-search-de/index.js',
    'idealo/index.js',
    'product-export-templates/index.js',
    'domain-link.service.js',
    'export-template.service.js',
    'sw-sales-channel-create-base/index.js',
    'sw-sales-channel-detail-product-comparison-preview/index.js',
    'sw-settings-item/index.js',
    'sw-settings-list.mixin.js',
    'sw-settings-address/index.js',
    'sw-settings-captcha-select-v2/index.js',
    'sw-settings-basic-information/index.js',
    'sw-settings-cache-modal/index.js',
    'sw-settings-cache/index.js',
    'sw-settings-cache-index/index.js',
    'sw-settings-cart/index.js',
    'sw-settings-country/index.js',
    'sw-settings-country-create/index.js',
    'sw-settings-currency/index.js',
    'sw-custom-field-translated-labels/index.js',
    'sw-custom-field-type-base/index.js',
    'sw-custom-field-type-checkbox/index.js',
    'sw-custom-field-type-date/index.js',
    'sw-custom-field-type-number/index.js',
    'sw-custom-field-type-text/index.js',
    'sw-custom-field-type-text-editor/index.js',
    'sw-settings-custom-field/index.js',
    'sw-customer-group-registration-seo-modal/index.js',
    'sw-settings-customer-group/index.js',
    'sw-settings-delivery-times/index.js',
    'sw-settings-delivery-time-create/index.js',
    'sw-settings-document/index.js',
    'sw-settings-language/index.js',
    'sw-settings-listing-delete-modal/index.js',
    'sw-settings-listing/index.js',
    'sw-settings-logging-entry-info/index.js',
    'sw-settings-logging-mail-sent-info/index.js',
    'sw-settings-logging/index.js',
    'sw-settings-logging-list/index.js',
    'sw-settings-login-registration/index.js',
    'sw-settings-mailer/index.js',
    'sw-settings-newsletter/index.js',
    'sw-settings-number-range/index.js',
    'sw-settings-number-range-create/index.js',
    'sw-plugin-box/index.js',
    'sw-settings-payment/index.js',
    'init/index.ts',
    'sw-settings-payment-create/index.js',
    'overview-cards.store.ts',
    'sw-settings-product-feature-sets/index.js',
    'feature-grid-translation.service.js',
    'sw-settings-rule-add-assignment-modal/index.js',
    'sw-settings-rule-assignment-listing/index.js',
    'sw-settings-rule-category-tree/index.js',
    'sw-settings-rule-tree/index.js',
    'sw-settings-rule-tree-item/index.js',
    'sw-settings-rule/index.js',
    'rule-assignment-configuration.service.js',
    'sw-settings-salutation/index.js',
    'sw-settings-search/index.js',
    'livesearch.api.service.js',
    'productIndex.api.service.js',
    'sw-settings-search-view-general/index.js',
    'sw-settings-search-view-live-search/index.js',
    'sw-seo-url-template-card/index.js',
    'sw-settings-seo/index.js',
    'sw-price-rule-modal/index.js',
    'sw-settings-shipping/index.js',
    'sw-settings-shopware-updates/index.js',
    'sw-settings-shopware-updates-index/index.js',
    'sw-settings-shopware-updates-info/index.js',
    'sw-settings-shopware-updates-plugins/index.js',
    'sw-settings-shopware-updates-requirements/index.js',
    'sw-settings-sitemap/index.js',
    'sw-settings-snippet/index.js',
    'sw-settings-snippet-create/index.js',
    'sw-settings-store/index.js',
    'sw-settings-tag/index.js',
    'sw-settings-tax-rule-type-zip-code/index.js',
    'sw-settings-tax-rule-type-zip-code-cell/index.js',
    'sw-settings-tax-rule-type-zip-code-range/index.js',
    'sw-settings-tax-rule-type-zip-code-range-cell/index.js',
    'sw-settings-tax/index.js',
    'sw-settings-units/index.js',
    'sw-settings-units-detail/index.ts',
    'sw-users-permissions-detailed-additional-permissions/index.js',
    'sw-users-permissions/index.js',
];

/**
 * @private
 */
export default missingTests;
