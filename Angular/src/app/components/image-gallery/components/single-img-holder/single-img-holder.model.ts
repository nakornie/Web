export class SingleImgHolder {
    raceMap = new Map<string, string>([
        ['Yzzil', 'race-yzzil'],
        ['Yggi', 'race-yggi'],
        ['Ouros', 'race-ouros'],
      ]);


    // Constructor
    constructor (
        public imgUrl: string,
        public title: string,
        public race: 'Yzzil' | 'Yggi' | 'Ouros',
        public history: string,
    ) {}


    // Getters and setters
    get raceClass(): string {
        return this.raceMap.get(this.race) || '';
    }

    // Methodes
}