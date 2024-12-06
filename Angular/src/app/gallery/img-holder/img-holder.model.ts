export class ImgHolder {
    ups = 0;
    downs = 0;
    isFavorite = false;
    voteState: 'none' | 'like' | 'dislike' = 'none';

    raceMap = new Map<string, string>([
        ['Yzzil', 'race-yzzil'],
        ['Yggi', 'race-yggi'],
        ['Ouros', 'race-ouros'],
      ]);


    // Constructor
    constructor (
        public imgUrl: string,
        public title: string,
        public description: string,
        public race: 'Yzzil' | 'Yggi' | 'Ouros',
        public createdAt: string,
        public imaginedBy: string,
        public drawnBy: string
    ) {}


    // Getters and setters
    get totalVotes(): number {
        return this.ups - this.downs;
    }

    get raceClass(): string {
        return this.raceMap.get(this.race) || '';
    }

    // Methodes
    addVote(voteType: 'like' | 'dislike') {
        if (voteType === 'like') {
            this.ups++;
        } else {
            this.downs++;
        }
    }

    changeVote(voteType: 'like' | 'dislike') {
        if (this.voteState === 'like') {
            this.removeVote('like');
        } else if (this.voteState === 'dislike') {
            this.removeVote('dislike');
        }
        this.addVote(voteType);
        this.voteState = voteType;
    }

    removeVote(voteType: 'like' | 'dislike') {
        if (voteType === 'like') {
            this.ups--;
        } else {
            this.downs--;
        }
        this.voteState = 'none';
    }

    toggleFavoriteState() {
        this.isFavorite = !this.isFavorite;
    }
}