import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { GAMES } from '../../data/game.data';

@Component({
  selector: 'app-game-page',
  templateUrl: './game-page.component.html',
  styleUrls: ['./game-page.component.scss']
})
export class GamePageComponent {
  game: any;

  constructor(private route: ActivatedRoute) {}

  ngOnInit() {
    this.route.paramMap.subscribe(params => {
      const gameRoute = params.get('gameName');
      this.game = GAMES.find(g => g.route === gameRoute);
    });
  }
}
