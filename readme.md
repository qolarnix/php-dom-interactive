### Experiments using DOMDocument to generate javascript bindings for AJAX

PHPs DOMDocument finds every instance of polar:click and generates a unique ID for the element:
```
<button polar:click="swap" id="polar_644e620de571e"></button>
```

Now we can append some javascript to create bindings. We store the unique ID and the function name:
```
var templateElements = templateElements || {};
templateElements['polar_644e620de571e'] = 'swap';
```

Now when our element is clicked we trigger an AJAX POST request that sends the correct function name to our endpoint, and uses the unique ID to update the DOM on success.