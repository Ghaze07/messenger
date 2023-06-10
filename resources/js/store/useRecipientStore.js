import { defineStore } from 'pinia'

export const useRecipientStore = defineStore('recipient',{
    state: () => ({
      recipients: [],
      activeRecipient: null,
      isLoading: false,
    }),
    getters: {
      currentRecipients: (state) => state.recipients,
    },
    actions: {
      // since we rely on `this`, we cannot use an arrow function
      setRecipients(items) {
        this.recipients = items
      },
      updateLoadingStatus(status) {
        this.isLoading = status
      },
      setActiveRecipient(recipient) {
        this.activeRecipient = recipient
      }
    },
  })
