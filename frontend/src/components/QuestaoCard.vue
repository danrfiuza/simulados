<template>
  <div v-if="questoes">
    <div v-if="questoes.length">
      <v-col>

        <v-card class="mx-auto" tile>
          <v-subheader>{{ assunto }}</v-subheader>

          <div v-for="questao in questoes" v-bind:key="questao.queid">
            <v-list-item three-line>
              <v-list-item-content>
                <v-list-item-title>
                  {{ questao.quedescricao }}
                </v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </div>
        </v-card>
      </v-col>
    </div>
  </div>
</template>
<script>
  export default {
    props: ["questoes", "assunto"],
  };
</script>
