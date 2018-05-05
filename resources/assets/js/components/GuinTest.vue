 <template>
    <v-app>
      <v-content>
        <v-container>{{ counter.count }}</v-container>
        <v-btn @click='increment' color="success">Increment</v-btn>
      </v-content>
    </v-app>
</template>


<script>
  import { mapState } from 'vuex'

  export default {
    computed: {
      localComputed () { /* ... */ },
      // mix this into the outer object with the object spread operator
      ...mapState([
        'counter',
      ])
    },
    mounted() {
        axios.get('/api/client/4/healthhistory')
          .then((response)=>{
            console.log(response.data);
          });
    },
    methods:{
      increment() {
        this.$store.commit('increment')
      }
    }
    
  }
</script>


