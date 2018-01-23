/*
 * BUILD AWESOME COMPONENTS
 */


(function() {
    
    window.addEventListener('load', initBuilder, false);
    
    
    function initBuilder() {
        
        // define the components
        var C = {
            boxout : {
                name : 'Boxout',
                class : 'cl-boxout',
                atts : {
                    title : [false, ''],
                    float : [false, ['none', 'left', 'right']],
                    class : [false, '']
                }
            },
            button : {
                name : 'Button',
                class : 'cl-button',
                atts : {
                    link : [true, ''],
                    text : [false, ''],
                    tooltip : [false, ''],
                    prominent : [false, false],
                    class : [false, '']
                }
            },
            card : {
                name : 'Card',
                class : 'cl-card',
                atts : {
                    link : [true, ''],
                    img : [false, ''],
                    alt : [false, ''],
                    title : [false, ''],
                    body : [false, ''],
                    button : [false, ''],
                    tooltip : [false, ''],
                    class : [false, '']
                }
            }
            
        };
        
        
        var select = document.getElementById('builder-select-component');
        for(var x in C) {
            var option = document.createElement('option');
            option.value = x;
            option.innerHTML = C[x].name;
            select.appendChild(
            
        }
                
        
        
    }
    
    
})();