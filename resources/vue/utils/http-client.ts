import axios, { type AxiosResponse } from 'axios'
import router from '@/router'
import { HTTP_STATUS_CODE, DEFAULT_AXIOS_TIMEOUT } from '@api/constants.api'

const httpClient = axios.create({
  timeout: DEFAULT_AXIOS_TIMEOUT,
  withCredentials: true,
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json',
    common: {
      'X-Requested-With': 'XMLHttpRequest'
    }
  }
})

httpClient.interceptors.response.use(
  (value: AxiosResponse<any, any>) => {
    const bearerToken = value.headers?.authorization
    if (bearerToken) {
      console.log(bearerToken)
    }
    return value
  },
  (error: any) => {
    if (HTTP_STATUS_CODE.HTTP_SESSION_EXPIRED === error.response.status) {
      router.push({ name: 'login' })
    }
    return Promise.reject(error)
  }
)

export default httpClient
