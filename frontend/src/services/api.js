import axios from "axios";

const api = axios.create({
  baseURL: process.env.VUE_APP_ROOT_API
});

export default api;
