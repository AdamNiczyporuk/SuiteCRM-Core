import {Component, OnDestroy, OnInit} from '@angular/core';
import {BaseWidgetComponent} from 'core';
import {ViewContext} from 'common';
import {LanguageStore} from '../../../../../../../core/app/core/src/lib/store/language/language.store';
import { string } from 'mathjs';



@Component({
    selector: 'scrm-hello-world-sidebar-widget',
    templateUrl: './hello-world-sidebar-widget.component.html',
    styles: []
})
export class HelloWorldSidebarWidgetComponent extends BaseWidgetComponent implements OnInit, OnDestroy {
    constructor(protected language: LanguageStore) {
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

    getHeaderLabel(): string {
        return  "MY widget2";//this.getLabel(this.config.labelKey) || '';
    }
    getLabel(key: string): string {
        const context = this.context || {} as ViewContext;
        const module = context.module || '';

        return this.language.getFieldLabel(key, module);
    }

}