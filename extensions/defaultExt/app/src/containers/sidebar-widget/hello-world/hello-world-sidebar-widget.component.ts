import {Component, OnDestroy, OnInit} from '@angular/core';
import {
    BaseWidgetComponent,
} from 'core';

@Component({
    selector: 'scrm-hello-world-sidebar-widget',
    templateUrl: './hello-world-sidebar-widget.component.html',
    styles: []
})
export class HelloWorldSidebarWidgetComponent extends BaseWidgetComponent implements OnInit, OnDestroy {
    constructor() {
        super();
    }
}