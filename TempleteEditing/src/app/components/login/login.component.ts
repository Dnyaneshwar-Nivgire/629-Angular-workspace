import { Component } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  username: string = '';
  password: string = '';
  rememberMe: boolean = false;
  isDisabled: boolean = true; // Set this to true to disable the button initially

  constructor() {}

  onLogin() {
    // This method won't do anything since the button is disabled
    console.log('Login attempt:');
    console.log('Username:', this.username);
    console.log('Password:', this.password);
    console.log('Remember Me:', this.rememberMe);
  }

  // Optionally, you can create a method to toggle the button's state
  toggleLoginButton() {
    this.isDisabled = !this.isDisabled;
  }
}
