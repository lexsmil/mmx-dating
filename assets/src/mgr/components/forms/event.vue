<template>
  <div>
    <BFormGroup :label="$t('models.event.title')">
      <BFormInput v-model="record.title" required />
    </BFormGroup>

    <BFormGroup :label="$t('models.event.date_start')">
      <FlatPickr v-model="record.date_start" :config="config" class="form-control" />
    </BFormGroup>

    <BFormGroup :label="$t('models.event.date_end')">
      <FlatPickr v-model="record.date_end" :config="config" class="form-control" />
    </BFormGroup>

    <BFormGroup class="mt-3">
      <BFormCheckbox v-model="record.active">{{ $t('models.event.active') }}</BFormCheckbox>
    </BFormGroup>
  </div>
</template>

<script setup lang="ts">
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

const config = ref({
  wrap: true, // set wrap to true only when using 'input-group'
  altFormat: 'd.m.Y H:i',
  altInput: true,
  dateFormat: 'Y-m-d H:i', // U - timestamp, Z - ISO format
  // dateFormat: 'U', // U - timestamp, Z - ISO format
  enableTime: true,
  time_24hr: true,
})
</script>
