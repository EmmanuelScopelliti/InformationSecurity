import { shallowMount } from '@vue/test-utils';
import ConditionDataProviderService from 'src/app/service/rule-condition.service';
import 'src/app/component/rule/condition-type/sw-condition-line-item-dimension-width';
import 'src/app/component/rule/sw-condition-operator-select';
import 'src/app/component/rule/sw-condition-base';
import 'src/app/component/rule/sw-condition-base-line-item';
import 'src/app/component/base/sw-button';
import 'src/app/component/form/sw-number-field';
import 'src/app/component/form/sw-text-field';
import 'src/app/component/form/field-base/sw-contextual-field';
import 'src/app/component/form/field-base/sw-block-field';
import 'src/app/component/form/field-base/sw-base-field';

describe('components/rule/condition-type/sw-condition-line-item-dimension-width', () => {
    let wrapper;

    beforeEach(async () => {
        wrapper = shallowMount(await Shopware.Component.build('sw-condition-line-item-dimension-width'), {
            stubs: {
                'sw-condition-operator-select': await Shopware.Component.build('sw-condition-operator-select'),
                'sw-number-field': await Shopware.Component.build('sw-number-field'),
                'sw-block-field': await Shopware.Component.build('sw-block-field'),
                'sw-contextual-field': await Shopware.Component.build('sw-contextual-field'),
                'sw-base-field': await Shopware.Component.build('sw-base-field'),
                'sw-context-button': true,
                'sw-context-menu-item': true,
                'sw-field-error': true,
                'sw-single-select': true,
                'sw-arrow-field': true,
                'sw-condition-type-select': true
            },
            provide: {
                conditionDataProviderService: new ConditionDataProviderService(),
                availableTypes: {},
                availableGroups: [],
                restrictedConditions: [],
                childAssociationField: {},
                validationService: {},
                insertNodeIntoTree: () => ({}),
                removeNodeFromTree: () => ({}),
                createCondition: () => ({}),
                conditionScopes: [],
                unwrapAllLineItemsCondition: () => ({})
            },
            propsData: {
                condition: {}
            }
        });
    });

    afterEach(() => {
        wrapper.destroy();
    });

    it('should be a Vue.js component', async () => {
        expect(wrapper.vm).toBeTruthy();
    });

    it('should allow input of float values', async () => {
        const input = wrapper.find('input[name=sw-field--amount]');
        await input.setValue('3.56');
        await input.trigger('change');
        expect(input.element.value).toBe('3.56');
    });
});
