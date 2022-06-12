const app = new Vue({

  el: '#app', 
  data: {
    albums: [],
    genres: [],
    apiUrl: 'http://localhost/php/php-ajax-dischi/api/api.php', 
    genreToSearch: 'all'
  }, 

  mounted() {
    this.getApi();
  },

  methods: {
    getApi() {
      axios.get(this.apiUrl, {
        params: {
          genre: this.genreToSearch
        }
      })
      .then(res => {
        console.log(res.data.albums);
        this.albums = res.data.albums;
        this.genres = res.data.genres;
      })
    }
  }

});