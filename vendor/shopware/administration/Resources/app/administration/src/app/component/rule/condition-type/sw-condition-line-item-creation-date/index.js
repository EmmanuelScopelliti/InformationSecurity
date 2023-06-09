import template from './sw-condition-line-item-creation-date.html.twig';

const { Component } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();

/**
 * @package business-ops
 * @deprecated tag:v6.5.0 This rule component will be removed. Use sw-condition-generic-line-item instead.
 */
Component.extend('sw-condition-line-item-creation-date', 'sw-condition-base-line-item', {
    template,

    data() {
        return {
            /**
             * @deprecated tag:v6.5.0 - will be removed without replacement
             */
            datepickerConfig: {
                enableTime: true,
                dateFormat: 'H:i',
                altFormat: 'H:i',
            },
        };
    },

    computed: {

        operators() {
            return this.conditionDataProviderService.getOperatorSet('date');
        },

        lineItemCreationDate: {
            get() {
                this.ensureValueExist();
                return this.condition.value.lineItemCreationDate || null;
            },
            set(lineItemCreationDate) {
                this.ensureValueExist();
                this.condition.value = { ...this.condition.value, lineItemCreationDate };
            },
        },

        ...mapPropertyErrors('condition', ['value.useTime', 'value.lineItemCreationDate']),

        currentError() {
            return this.conditionValueLineItemCreationDateError;
        },
    },
});
