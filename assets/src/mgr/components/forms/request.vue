<template>
  <div>
    <BFormGroup :label="$t('models.request.name')">
      <BFormInput v-model="record.name" required />
    </BFormGroup>

    <BFormGroup :label="$t('models.request.event_id')">
      <MmxInputComboBox v-model="record.event_id" url="mgr/events" text-field="title">
        <template #default="{item}">
          {{ item.title }}
          <div v-if="item.date_start" class="small text-secondary">{{ formatDate(item.date_start) }}</div>
        </template>
      </MmxInputComboBox>
    </BFormGroup>

    <BFormGroup :label="$t('models.request.phone')">
      <BFormInput v-model="record.phone" required />
    </BFormGroup>

    <BFormGroup :label="$t('models.request.email')">
      <BFormInput v-model="record.email" type="email" required />
    </BFormGroup>

    <BFormGroup :label="$t('models.request.age')">
      <BFormInput v-model="record.age" type="number" min="18" max="80" required />
    </BFormGroup>

    <BFormGroup :label="$t('models.request.sex')">
      <BFormSelect
        v-model="record.sex"
        :options="[
          {value: false, text: $t(`models.request.sex.man`)},
          {value: true, text: $t(`models.request.sex.woman`)},
        ]"
        required
      >
      </BFormSelect>
    </BFormGroup>

    <BFormGroup class="mt-3">
      <BFormCheckbox v-model="record.active">{{ $t('models.event.active') }}</BFormCheckbox>
    </BFormGroup>
  </div>
</template>

<script setup lang="ts">
import {formatDate} from '../../utils/utils.ts'

const props = defineProps({
  modelValue: {
    type: Object,
    required: true,
  },
})

const emit = defineEmits(['update:modelValue'])
const record: any = computed({
  get() {
    return props.modelValue
  },
  set(newValue: number) {
    emit('update:modelValue', newValue)
  },
})
</script>
