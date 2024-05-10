export function formatDate(val: string | null): string {
  if (!val) {
    return ''
  }
  const date = new Date(val)
  return date.toLocaleDateString() + ' ' + date.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'})
}

export function formatSex(val: bigint): string {
  return val === false ? 'Мужской' : 'Женский'
}
