
<div @click.outside="close()" x-data="{
    count :  0,
    value: '',
    open: true,
    toggle(){
        this.open = !this.open
    },

    close(){
        this.open = false
    },

    get isOpen(){
        return this.open
        
    },

    html: `<h3>Hello html</h3>`
}">

    <button @click="count++">Click</button>
    <button x-on:click="toggle">Click Switcher</button>
    <button @mouseenter="toggle"> MouseEnter Switcher</button>



    <div>
        <p x-show="isOpen" x-transition.duration.500ms>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, natus quasi qui praesentium magni voluptatum architecto sequi vitae quo? Iste asperiores quidem minima officiis, nihil amet reiciendis doloribus sed consectetur magni, alias tenetur id accusamus? Sequi voluptas omnis quia, veritatis placeat cum saepe. Accusantium, commodi. Molestias aliquam temporibus corporis officia amet pariatur perspiciatis a deserunt suscipit odit maxime aperiam, aut ullam consequuntur veniam quo asperiores modi! Nisi veniam sequi hic voluptatem asperiores libero minus laboriosam odit? Magnam autem, non omnis laborum itaque amet temporibus, velit culpa veniam animi sit ea quod expedita harum aliquid porro libero illum, nostrum unde. Suscipit.
        </p>

        <input 
            x-model="value"
            @input.debounce.1000ms="
                if(!value.length) return; 
                fetch(`/q=${value}`)
            
            " 
            @keydown.enter.shift.window="console.log($event.target.value); 
            value = '' " 
            type="text"
        
        >
        <div  x-bind:class="{'hidden': open}" class="hidden text" x-text="count" class="out">0</div>
        <div x-html="html"></div>

        <div x-data="{
            secondText :  'some text' 
        }">
        
            <div x-text="console.log(isOpen)"></div>
        </div>
   </div>

</div>





