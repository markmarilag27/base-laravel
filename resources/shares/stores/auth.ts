import { STORE_MODULE } from '@api/constants.api';
import { defineStore } from 'pinia';

export const useAuthStore = defineStore(STORE_MODULE.AUTH, {
  state: () => {
    return {
      user: {}
    }
  }
})
