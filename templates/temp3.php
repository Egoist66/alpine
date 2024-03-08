
<form id="form" x-data="{
    name: '',
    agree: true,
    period: null
   
}" x-on:submit.prevent="">

    <label>
        User name: 
        <input  x-model="name" name="name" type="text">
    </label>

    <label>
        Check it
        <input x-model="agree" type="checkbox" name="check" id="check">
    </label>

    <select x-model="period" name="select" id="select">
        <option value="one-day">1</option>
        <option value="second-day">2</option>
        <option value="third-day">3</option>
    </select>

    <div x-html="agree ? '<p>Agreement is signed' : 'Agreement is not signed!</p>'"></div>
    <p x-text="period"></p>

    <div>
        <button type="submit">Send form</button>
        <button @click="name='ALpine is cool'" type="button">Change name</button>
    </div>

</form>







