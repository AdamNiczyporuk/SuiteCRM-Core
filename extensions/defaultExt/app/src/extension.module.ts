import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {SidebarWidgetRegistry} from 'core';
import {HttpClientModule} from '@angular/common/http';
import {HelloWorldSidebarWidgetModule} from './containers/sidebar-widget/hello-world/hello-world-sidebar-widget.module';
import {HelloWorldSidebarWidgetComponent} from './containers/sidebar-widget/hello-world/hello-world-sidebar-widget.component';

@NgModule({
    declarations: [],
    imports: [
        CommonModule,
        HttpClientModule,
        HelloWorldSidebarWidgetModule,
    ],
})
export class ExtensionModule {
    constructor(protected sidebarWidgetRegistry: SidebarWidgetRegistry) {

        console.log('sidebar widget register');
        sidebarWidgetRegistry.register('default', 'hello-world', HelloWorldSidebarWidgetComponent);

        console.log('loaded');
    }
}
