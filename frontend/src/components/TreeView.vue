<template>
  <v-card>
    <v-toolbar color="primary" dark flat>
      <v-icon>mdi-filter</v-icon>
      <v-toolbar-title>Filtrar Assuntos</v-toolbar-title>
    </v-toolbar>
    <v-card-text>
      <ValidationObserver ref="observer" v-slot="{ validate, reset }">
        <form>
          <v-row align="center">
            <v-col cols="12" sm="6">
              <ValidationProvider
                v-slot="{ errors }"
                name="Órgão"
                rules="required"
              >
                <v-select
                  v-model="orgid"
                  :error-messages="errors"
                  required
                  :items="orgaos"
                  label="Selecione um Órgão"
                  id="orgid"
                  item-text="orgdescricao"
                  item-value="orgid"
                  data-vv-name="banid"
                  outlined
                ></v-select>
              </ValidationProvider>
            </v-col>

            <v-col cols="12" sm="6">
              <ValidationProvider
                v-slot="{ errors }"
                name="Banca"
                rules="required"
              >
                <v-select
                  v-model="banid"
                  :error-messages="errors"
                  required
                  :items="bancas"
                  label="Selecione uma Banca"
                  id="banid"
                  item-text="bandescricao"
                  item-value="banid"
                  data-vv-name="banid"
                  outlined
                ></v-select>
              </ValidationProvider>
            </v-col>
          </v-row>
          <v-row align="center">
            <v-col cols="12" sm="6">
              <v-btn class="mr-4" @click="submit"
                >Montar Programa <v-icon>mdi-bookmark</v-icon></v-btn
              >
              <v-btn class="mr-4" @click="clear"
                >Limpar Filtros <v-icon>mdi-eraser</v-icon></v-btn
              >
            </v-col>
          </v-row>
        </form>
      </ValidationObserver>
    </v-card-text>
    <v-row>
      <v-col>
        <v-card-text>
          <v-treeview
            v-model="tree"
            input="onChange"
            :items="items"
            item-key="assid"
            item-text="assdescricao"
            item-children="assuntos"
            selected-color="primary"
            open-on-click
            selectable
            return-object
            expand-icon="mdi-chevron-down"
            on-icon="mdi-bookmark"
            off-icon="mdi-bookmark-outline"
            indeterminate-icon="mdi-bookmark-minus"
            hoverable
            activatable
            shaped
            rounded
            open-all
            transition
          >
          </v-treeview>
        </v-card-text>
      </v-col>

      <v-divider vertical></v-divider>

      <v-col cols="12" md="6">
        <v-card-text>
          <div
            v-if="tree.length === 0"
            key="title"
            class="title font-weight-light grey--text pa-4 text-center"
          >
            Faça o filtro por órgão e banca e em seguida selecione um assunto.
          </div>

          <v-scroll-x-transition group hide-on-leave>
            <div v-for="(selection, i) in tree" :key="i">
              <div v-if="selection.questoes">
                  <QuestaoCard
                    v-bind:questoes="selection.questoes"
                    v-bind:assunto="selection.assdescricao"
                  />
              </div>
            </div>
          </v-scroll-x-transition>
        </v-card-text>
      </v-col>
    </v-row>

    <v-divider></v-divider>
  </v-card>
</template>

<script>
import { getArvoreAssuntos, getBancas, getOrgaos } from "../services/http";
import { required, email, max } from "vee-validate/dist/rules";
import QuestaoCard from "./QuestaoCard";
import {
  extend,
  ValidationObserver,
  ValidationProvider,
  setInteractionMode,
} from "vee-validate";

setInteractionMode("eager");

extend("required", {
  ...required,
  message: "O campo {_field_} é obrigatório.",
});

export default {
  components: {
    ValidationProvider,
    ValidationObserver,
    QuestaoCard,
  },
  data: () => ({
    assuntos: [],
    isLoading: false,
    tree: [],
    children: [],
    bancas: [],
    orgaos: [],
    orgid: null,
    banid: null,
  }),
  computed: {
    items() {
      const assuntos = this.getChildren(this.assuntos);

      return [
        {
          assdescricao: "Assuntos",
          assuntos,
        },
      ];
    },
    selection() {
      console.log(this.active);
      if (!this.active.length) return undefined;
      const assid = this.active[0];

      return this.assuntos.find((assunto) => assunto.assid === assid);
    },
    shouldShowTree() {
      return this.assuntos.length > 0 && !this.isLoading;
    },
  },
  async mounted() {
    this.bancas = await getBancas();
    this.orgaos = await getOrgaos();
  },
  methods: {
    async fetchAssuntos() {
      this.assuntos = await getArvoreAssuntos(this.banid, this.orgid);
    },
    getChildren(assuntos) {
      if (!assuntos) {
        return;
      }

      const assuntosList = [];
      for (const assunto of assuntos) {
        let newAssuntos = [];

        if (assunto.assidpai == null) {
          newAssuntos = assunto.child_assuntos;
        } else {
          newAssuntos = assunto.assuntos;
        }

        assunto.child_assuntos = null;
        assuntosList.push({
          ...assunto,
          assdescricao: this.getName(assunto),
          assuntos: this.getChildren(newAssuntos),
          noquestoes: !assunto.questoes_count || !assunto.questoes_count === 0,
        });
      }
      return assuntosList;
    },
    onChange(items) {
      console.log(items);
    },
    getName(assunto) {
      const countQuestoes = assunto.questoes_count
        ? `(Questões: ${assunto.questoes_count})`
        : " ";
      return `${assunto.assdescricao} ${countQuestoes}`;
    },
    loadQuestoes() {},
    async submit() {
      const isValid = await this.$refs.observer.validate();
      if (!isValid) {
        return;
      }
      this.fetchAssuntos();
    },
    clear() {
      this.orgid = null;
      this.banid = null;
      this.$refs.observer.reset();
      this.assuntos = [];
    },
  },
};
</script>
