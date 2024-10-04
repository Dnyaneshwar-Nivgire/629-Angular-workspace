import { Component } from '@angular/core';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
  username: string = '';
  password: string = '';
  confirmPassword: string = '';

  constructor() {}

  onRegister() {
    // Add your registration logic here
    if (this.password !== this.confirmPassword) {
      alert("Passwords do not match!");
      return;
    }

    // For demonstration, log the input values
    console.log('Registering User:');
    console.log('Username:', this.username);
    console.log('Password:', this.password);
    
    // Add actual registration logic (e.g., call to API)
    alert('Registration successful!');
    
    // Reset form values
    this.username = '';
    this.password = '';
    this.confirmPassword = '';
  }
}
