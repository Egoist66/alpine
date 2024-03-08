<div x-data="{
    person: '',
    people: ['Jack', 'Peter', 'Vova', 'Igor', 'Vasya'],
    foundPeople: [],
    
    getPeople(){
        if(this.person === ''){
            this.foundPeople = []
            return
        }
        this.foundPeople = [...new Set(this.people.filter(p => p.includes(this.person)))]
    }
}">

    <label>
        Enter country:

        <input  @keyup.debounce.1000ms="getPeople" x-model="person" type="text">

        
       
        <template :key="i" x-for="(p, i) in foundPeople">
            <div  x-html="p"></div>
        </template>
           
     
        


    </label>


</div>