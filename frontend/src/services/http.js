import api from "./api";

export const getBancas = async () => {
  const {
    data
  } = await api.get(`/banca`);
  return data;
};

export const getOrgaos = async () => {
  const {
    data
  } = await api.get(`/orgao`);
  return data;
};

export const getArvoreAssuntos = async (banid, orgid) => {
  const {
    data
  } = await api.post(`/arvore`, {
    'banid': banid,
    'orgid': orgid
  });
  return data;
}