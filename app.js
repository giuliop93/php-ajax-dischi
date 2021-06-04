const app = new Vue ({
    el: "#app",
    data: {
        albums: [],
        

    },
    methods:{

        
    },
    mounted() {
        axios.get("http://localhost/boolean/php-ajax-dischi/discs.php")
        .then((resp) => {
            
            this.albums = resp.data;
            
        })
    }
}) 