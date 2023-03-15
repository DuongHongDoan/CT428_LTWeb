var SignupForm = Vue.component('signup-form', {
  
    // TEMPLATE
    template: '#signup-form',
    
    // DATA
    data() {
      return {
        email: '',
        email_msg: '',
        password1: '',
        pwd1_msg: '',
        password2: '',
        pwd2_msg: '',
        disable_btn: true,
        msg1: true,
        msg2: true
      }
    },
    
    // WATCH
    watch: {
      email: function(value) {
        this.valid_email(value, 'email_msg');
      },
      password1: function(value) {
        if(this.check_password_length(value, 'pwd1_msg', 6)) {
          this.check_passwords_match();
        }
      },
      password2: function(value) {
        if(this.check_password_length(value, 'pwd2_msg', 6)) {
          this.check_passwords_match();
        }
      }
    },
    
    // METHODS
    methods: {
      
      valid_email(email, msg) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
          this[msg] = '';
          return true;
        } else {
          this[msg] = 'Keep typing...waiting for a valid email';
          return false;
        } 
      },
      
      check_password_length(value, msg, total) {
        var length = value.length;
        var sum = 0;
        var display;
        
        sum = (total - length);
        
        switch(sum) {
          case 0:
            display = '';
            break;
          case 1:
            display = 'Keep going - just need '+ sum + ' more character.';
            break;
          default:
            display = 'Keep going - just need '+ sum + ' more characters';
        }
        
        if(length >= total) {
          this[msg] = '';
          return true;
        } else {
          this[msg] = display;
          return false;
        }
        
      },
      
      check_passwords_match() {
        if(this.password1.length > 5 && this.password2.length > 5) {
            if(this.password2 != this.password1) {
              this.pwd2_msg = 'Passwords do not match';
              this.disable_btn = true;
              return true;
            } else {
              this.pwd2_msg = '';
              this.disable_btn = false;
              return false;
            }
          }
      },
      
      on_signup() {
        this.email = '';
        this.password1 = '';
        this.password2 = '';
        this.email_msg = '';
        this.pwd1_msg = '';
        this.pwd2_msg = '';
        this.msg1 = false;
        this.msg2 = false;
        this.disable_btn = true;
        this.$emit('change_comp', 'results');
      }, 
      
      show_terms() {
        this.$emit('change_comp', 'terms');
      }
    }
    
  });
  
  var Results = Vue.component('results', {
    
    // TEMPLATE
    template: '#results',
    
    // METHODS
    methods: {
      back_to_signup() {
        this.$emit('change_comp', 'signup-form');
      }
    }
    
  });
  
  var Terms = Vue.component('terms', {
    
    // TEMPLATE
    template: '#terms',
    
    // METHODS
    methods: {
      back_to_signup() {
        this.$emit('change_comp', 'signup-form');
      }
    }
    
  });
  
  
  new Vue({
    
    // ELEMENT
    el: '#app',
    
    // DATA 
    data: {
      compname: 'signup-form'
    },
    
    // COMPONENTS
    components: {
      'signup-form': SignupForm,
      'results': Results,
      'terms': Terms
    },
    
    methods: {
      swapcomp: function(comp) {
        this.compname = comp;
      }
    }
    
  });