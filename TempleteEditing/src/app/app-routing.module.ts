import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { FooterComponent } from './components/footer/footer.component';
import { LogoutComponent } from './components/logout/logout.component';

const routes: Routes = [

// 
{
path:'',redirectTo:'home'
,pathMatch:'full'
},
{
path:'home',component:HomeComponent
},
{
  path:'login',component:LoginComponent
},
{

  path:'register',component:RegisterComponent
},
{
  path:'footer',component:FooterComponent
},
{
path:'logout',component:LogoutComponent
}


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
