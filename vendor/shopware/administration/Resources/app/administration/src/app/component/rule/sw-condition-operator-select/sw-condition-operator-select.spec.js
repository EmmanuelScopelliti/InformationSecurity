import { shallowMount } from '@vue/test-utils';
import 'src/app/component/rule/sw-condition-operator-select';

async function createWrapper(customProps = {}) {
    return shallowMount(await Shopware.Component.build('sw-condition-operator-select'), {
        stubs: {
            'sw-arrow-field': true,
            'sw-single-select': true
        },
        propsData: {
            condition: {},
            operators: [],
            ...customProps
        }
    });
}

describe('src/app/component/rule/sw-condition-operator-select', () => {
    it('should be a Vue.JS component', async () => {
        const wrapper = await createWrapper();
        expect(wrapper.vm).toBeTruthy();
    });

    it('should have enabled fields', async () => {
        const wrapper = await createWrapper();

        const arrowField = wrapper.find('sw-arrow-field-stub');
        const singleSelect = wrapper.find('sw-single-select-stub');

        expect(arrowField.attributes().disabled).toBeUndefined();
        expect(singleSelect.attributes().disabled).toBeUndefined();
    });

    it('should have disabled fields', async () => {
        const wrapper = await createWrapper({
            disabled: true
        });

        const arrowField = wrapper.find('sw-arrow-field-stub');
        const singleSelect = wrapper.find('sw-single-select-stub');

        expect(arrowField.attributes().disabled).toBe('true');
        expect(singleSelect.attributes().disabled).toBe('true');
    });
});
