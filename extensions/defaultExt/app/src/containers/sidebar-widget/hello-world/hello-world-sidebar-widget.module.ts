import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {HelloWorldSidebarWidgetComponent} from './hello-world-sidebar-widget.component';
import {LoadingSpinnerModule, WidgetPanelModule} from 'core';

@NgModule({
    declarations: [HelloWorldSidebarWidgetComponent],
    exports: [
        HelloWorldSidebarWidgetComponent
    ],
    imports: [
        CommonModule,
        LoadingSpinnerModule,
        WidgetPanelModule,
    ]
})
export class HelloWorldSidebarWidgetModule {
}