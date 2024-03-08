
<div id="random-photos" x-data="{
    dogImg: '',
    async getImg(){
        const response = await fetch('https://dog.ceo/api/breeds/image/random');
        const res = await response.json();

        this.dogImg = res.message;
        
    }
}">

    <button @click="getImg()">Fetch image</button>

    <div>
        <img x-bind:src="dogImg" alt="">
    </div>

</div>







