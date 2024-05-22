import {Component, OnDestroy, OnInit} from '@angular/core';
import {BaseWidgetComponent} from 'core';

@Component({
    selector: 'scrm-hello-world-sidebar-widget',
    templateUrl: './hello-world-sidebar-widget.component.html',
    styles: []
})
export class HelloWorldSidebarWidgetComponent extends BaseWidgetComponent implements OnInit, OnDestroy {
    constructor() {
        super();
    }
    ngOnDestroy(): void {
        // Tutaj możesz umieścić logikę, która ma być wykonana przy niszczeniu komponentu
        console.log('HelloWorldSidebarWidgetComponent destroyed');
    }
    ngOnInit(): void {
        // Tutaj możesz umieścić logikę, która ma być wykonana przy tworzeniu  komponentu
        console.log('HelloWorldSidebarWidgetComponent Init');
    }

}